<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $data = [];
    protected $addUrl = '/product/add';
    protected $editUrl = '/product/edit';
    protected $listUrl = '/product';
    protected $viewUrl = '/product/view';
    protected $deleteUrl = '/product/delete';
    protected $producttRepository;
    public function __construct(ProductRepository $producttRepository)
    {
        $this->middleware('auth');
        $this->producttRepository = $producttRepository;
        $this->data['addUrl'] = url('/') . $this->addUrl;
        $this->data['listUrl'] = url('/') . $this->listUrl;
        $this->data['editUrl'] = url('/') . $this->editUrl;
        $this->data['viewUrl'] = url('/') . $this->viewUrl;
        $this->data['deleteUrl'] = url('/') . $this->deleteUrl;
    }

    public function index(Request $request)
    {

        $products = Product::orderBy('id', 'desc')->paginate(2);
        $this->data['products'] = $products;
        $this->data['isGroupOptions'] =  $this->isGroupOptions();
        $this->data['statusOptions'] =  $this->statusOptions();
        $this->data['customerOptions'] =  $this->customerOptions();

        return view('product.list', $this->data);
    }

    public function postDelete($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

//        Session::flash('flash_message', 'Successfully deleted!');

        return redirect()->route('product-list');
    }

    public function getAdd(){
        $this->data['isGroupOptions'] =  $this->isGroupOptions();
        $this->data['statusOptions'] =  $this->statusOptions();
        $this->data['customerOptions'] =  $this->customerOptions();

        return view('product.add', $this->data);
    }

    public function postAdd(Request $request){
        $rules = [
            'str_ten' => 'required',
            'type_group' => 'required|not_in:0',
            'type_customer' => 'required|not_in:0',
            'type_code' => 'required',
            'type_amount' => 'required|min:0',
            'status' => 'required|not_in:0',
        ];

        if ($request->input('type_amount') != null){
            $request->merge([
                'type_amount' => str_replace(['.'], '', $request->get('type_amount'))
            ]);
        }

        $messages = [
            'required' => 'Trường này không được bỏ trống',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {

            return \Redirect::back()->withErrors($validator)->withInput();

        } else {

            $image =$request->file('profile_image');
            $imageOriginal = time().'-'.$request->file('profile_image')->getClientOriginalName();
            $folder = 'static/img/';
            $image->move($folder, $imageOriginal);
            $model = new Product();
            $id = Auth::user()->id;
            $model->str_ten = trim($request->input('str_ten'), '');
            $model->image = $imageOriginal;
            $model->type_group = $request->input('type_group');
            $model->type_customer = $request->input('type_customer');
            $model->type_code = $request->input('type_code');
            $model->type_amount = $request->input('type_amount');
            $model->status = $request->input('status');
            $model->id_user = $id;
            $model->created_at = time();
            $model->save();
            return redirect()->route('product-list');
        }


    }

    public function getEdit($id)
    {
       $product = Product::find($id);

        if (empty($product)) {
            return abort(404);
        }

        $this->data['isGroupOptions'] =  $this->isGroupOptions();
        $this->data['statusOptions'] =  $this->statusOptions();
        $this->data['customerOptions'] =  $this->customerOptions();

        $this->data['products'] = $product;

        return view('product.edit', $this->data);
    }

    public function postEdit($id, Request $request)
    {
        $rules = [
            'str_ten' => 'required',
            'type_group' => 'required|not_in:0',
            'type_customer' => 'required|not_in:0',
            'type_code' => 'required',
            'type_amount' => 'required|min:0',
            'status' => 'required|not_in:0',
        ];

        if ($request->input('type_amount') != null){
            $request->merge([
                'type_amount' => str_replace(['.'], '', $request->get('type_amount'))
            ]);
        }

        $messages = [
            'required' => 'Trường này không được bỏ trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {

            return \Redirect::back()->withErrors($validator)->withInput();

        } else {
            $product = Product::find($id);
            if(empty( $request->file('profile_image'))){

            }else{
                $image =$request->file('profile_image');
                $imageOriginal = time().'-'.$request->file('profile_image')->getClientOriginalName();
                $folder = 'static/img/';
                $image->move($folder, $imageOriginal);
                $product->image = $imageOriginal;
            }

            $product->str_ten = trim($request->input('str_ten'), '');
            $product->type_group = $request->input('type_group');
            $product->type_customer = $request->input('type_customer');
            $product->type_code = $request->input('type_code');
            $product->type_amount = $request->input('type_amount');
            $product->status = $request->input('status');
            $product->id_user = $id;
            $product->created_at = time();
            $product->save();
//            Session::flash('flash_message', 'Successfully edit!');
            return redirect()->route('product-list');
        }

    }

    private function isGroupOptions(){
        $status = [
            '0' =>'chưa chọn',
            '1' =>'điện thoại',
            '2'=> 'máy tính'
        ];
        return $status;
    }

    private function customerOptions(){
        $status = [
            '0' =>'chưa chọn',
            '1'=> 'iPhone',
            '2' =>'SAMSUNG',
            '3'=> 'OPPO',
            '4'=> 'Macbook',
            '5'=> 'Asus'
        ];
        return $status;
    }

    private function statusOptions(){
        $status = [
            '0' =>'chưa chọn',
            '1' =>'mới tạo',
            '2' =>'đang kiểm duyệt',
            '3' =>'chấp nhận',
            '4'=> 'từ chối'
        ];
        return $status;
    }
}
