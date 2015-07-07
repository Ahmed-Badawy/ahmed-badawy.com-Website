<?php

namespace App\Http\Controllers\SellingManager;
use App\Http\Controllers\BaseController;


class SellingManagerController extends BaseController{

    public function getIndex(){
        return \Redirect::to("selling-manager/new-invoice");
    }


/*****************************************************
 **  Products Area
 *****************************************************/
    public function getProductsList(){
        $list['products'] = \Selling_Manager_Products_Model::all();
//        dd($list);
        $list['cates'] = \Selling_Manager_Products_Model::lists("cate")->unique();
        return $list;
    }
    public function getNewProduct(){
        $data = [
            'route_info'=>\sr::common("projects_index"),
            'theme'=>$this->themes[0],
            'inner_layout'=>"new-product"
        ];
        $cates = $this->getProductsList()['cates'];
        \Session::flash('cates',$cates);
        return $this->get_view("Selling-Manager._layout",$data);
    }
    public function postNewProduct(){
        $input = \Request::all();
//        dd($input);
        $max_sort_order = \Selling_Manager_Products_Model::max('sort_order');
        $create_array = [
            "product_name"=>$input['product_name'],
            "count"=>$input['count'],
            "buy_cost"=>$input['buy_cost'],
            "sell_cost"=>$input['sell_cost'],
            "desc"=>$input['desc'],
            "cate"=> ((empty(trim($input['new_cate']))) ? $input['cate'] : $input['new_cate']),
            "sort_order"=> ($max_sort_order+1)
        ];
        if(\Request::hasFile("product_img")){
            $img_save_path = real_imgs_dir."selling-manager";
            $product_img_name = $this->upload_file(\Request::file("product_img"),$img_save_path);
            $create_array["product_img"] = $product_img_name;
        }
        \Selling_Manager_Products_Model::create($create_array);
        return \Redirect::back();
    }
    public function getUpdateProduct(){
        $data = [
            'route_info'=>\sr::common("projects_index"),
            'theme'=>$this->themes[0],
            'inner_layout'=>"update-product"
        ];
        $cates = $this->getProductsList()['cates'];
        \Session::flash('cates',$cates);
        return $this->get_view("Selling-Manager._layout",$data);
    }
    public function postUpdateProduct(){
        $input = \Request::all();
        $id = $input['id'];
        $update_array = [
            "product_name"=>$input['product_name'],
            "count"=>$input['count'],
            "buy_cost"=>$input['buy_cost'],
            "sell_cost"=>$input['sell_cost'],
            "desc"=>$input['desc'],
            "cate"=>$input['cate'],
        ];
        if(\Request::hasFile("product_img")){
//            dd($input);
            $img_save_path = real_imgs_dir."selling-manager";
            $product_img_name = $this->upload_file(\Request::file("product_img"),$img_save_path);
            $update_array["product_img"] = $product_img_name;
        }
        \Selling_Manager_Products_Model::find($id)->update($update_array);
        return \Redirect::back();
    }
    public function getDeleteProduct($id){
        $obj = new \Selling_Manager_Products_Model();
        $product = $obj->find($id);
        $all_products = $obj->all();
        foreach($all_products as $p){
            if( ($p->sort_order) > ($product->sort_order) ){
                $obj->find($p->id)->update(['sort_order'=>$p->sort_order-1]);
            }
        }
        $product->delete();
        return \Redirect::back();
    }
    public function postProductsPositionSave(){
        $obj = new \Selling_Manager_Products_Model();
        $products = \Request::all()['products'];
        foreach($products as $product){
            $obj->find($product["id"])->update([ 'sort_order'=>$product["sort_order"] ]);
        }
    }
    /*--------------------------------------------------*/


    /*****************************************************
     ** Invoice Area
     *****************************************************/
    public function getInvoicesData($id=false){
        if($id==false) {
            $invoices = \Selling_Manager_Invoice_Model::orderBy('id', 'desc')->get();
            foreach ($invoices as $invoice) {
                $invoice->products = \Selling_Manager_Invoice_Items_Model::where('invoice_id', $invoice->id)->get();
            }
            return $invoices;
        }elseif($id){
            $invoice = \Selling_Manager_Invoice_Model::find($id);
            $invoice->products = \Selling_Manager_Invoice_Items_Model::where('invoice_id', $id)->get();
            return $invoice;
        }
    }
    public function getNewInvoice(){
        $data = [
            'route_info'=>\sr::selling_manager("new-invoice"),
            'theme'=>$this->themes[0],
            'inner_layout'=>"new-invoice"
        ];
        $cates = $this->getProductsList()['cates'];
        \Session::flash('cates',$cates);
        return $this->get_view("Selling-Manager._layout",$data);
    }
    public function postInvoiceSave(){
        $product_data = [];
        $products_data = [];
        $input = \Request::all()["invoice"];

        $customer_name = (isset($input['customer_name']) && !empty(trim($input['customer_name']))) ? $input['customer_name'] : "No Name";
        $customer_phone = (isset($input['customer_phone']) && !empty(trim($input['customer_phone']))) ? $input['customer_phone'] : "No Phone";
        $desc = (isset($input['desc']) && !empty(trim($input['desc']))) ? $input['desc'] : "No Description";
        $invoice_data = [
            "customer_name" => $customer_name,
            "customer_phone" => $customer_phone,
            "over_all_cost" => $input['over_all_cost'],
            "discount" => $input['discount'],
            "final_over_all_cost" => $input['final_over_all_cost'],
            "desc" => $desc,
        ];
        $invoice = \Selling_Manager_Invoice_Model::create($invoice_data);

        foreach($input['products'] as $val){
            $product_data = [
                "product_id" => $val['id'],
                "product_name" => $val['product_name'],
                "order_number" => $val['order_number'],
                "buy_cost" => $val['buy_cost'],
                "sell_cost" => $val['sell_cost'],
                "invoice_id" => $invoice->id,
            ];
            $invoice_id = \Selling_Manager_Invoice_Items_Model::create($product_data);
            $products_data[] = $product_data;
        }
//        dd($products_data);
//        return \Redirect::back();
//        $obj = \Selling_Manager_Products_Model::find($id);
    }


    public function getInvoiceView(){
        $data = [
            'route_info'=>\sr::common("projects_index"),
            'theme'=>$this->themes[0],
            'inner_layout'=>"invoice-view"
        ];
        return $this->get_view("Selling-Manager._layout",$data);
    }
    public function getDeleteInvoice($id){
        $invoice_products = \Selling_Manager_Invoice_Items_Model::where('invoice_id',$id)->delete();
        $invoice = \Selling_Manager_Invoice_Model::find($id)->delete();
        return \Redirect::back();

//        $obj = \Selling_Manager_Products_Model::find($id);
    }
    public function getUpdateInvoice($invoice_id){
        $data = [
            'route_info'=>\sr::common("projects_index"),
            'theme'=>$this->themes[0],
            'inner_layout'=>"update-invoice",
        ];
        \Session::flash("updated_invoice",$invoice_id);
        return $this->get_view("Selling-Manager._layout",$data);
    }
    /*--------------------------------------------------*/











    public function upload_file($file,$destinationPath){
//        $file_name = $file->getClientOriginalName();
        $ext = $file->getClientOriginalExtension();
        $file_name = time();
//        $final_name =  $filename.".".$extension;
        $file_name = $file_name.".".$ext;
        $upload_success = $file->move($destinationPath,$file_name);
        if( $upload_success ) {
            // return Response::json('success', 200);
            return $file_name;
        } else {
            // return Response::json('error', 400);
            return "error";
        }
    }
}