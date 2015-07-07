var myApp = angular.module('myApp',[]);


myApp.controller("view_products",function($scope,$http) {

    $scope.cates = [];
    $scope.products_data = [];

    $scope.invoice = {};
    $scope.invoice.products = [];
    $scope.invoice.ids = [];
    $scope.invoice.over_all_cost = 0;


    $http.get("products-list").success(function(data){
        console.log(data);
        $scope.products_data = data.products;
        $scope.cates = data.cates;
    });

    $scope.add_to_invoice = function(product){
        if(inArray(product.id,$scope.invoice.ids)){
            angular.forEach($scope.invoice.products, function(value, key) {
                if(product.id==value.id) value.order_number++;
            });
        }else{
            product.order_number = 1;
            $scope.invoice.ids.push(product.id);
            $scope.invoice.products.push(product);
        }
        $scope.refresh_invoice_cost();
        console.log($scope.invoice);            
    }

    $scope.adjust_order_number = function(product,type){
        if(type=="minus") {
            if (product.order_number > 1) {
                product.order_number--;
            } else $scope.delete_from_invoice(product);
        }else if(type=="plus") product.order_number++;
        $scope.refresh_invoice_cost();
    }

    $scope.delete_from_invoice = function(product){
        angular.forEach($scope.invoice.products, function(value, key) {
            if(product.id==value.id){
                $scope.invoice.products.splice(key, 1);
                index = $scope.invoice.ids.indexOf(product.id);
                $scope.invoice.ids.splice(index, 1);
                $scope.refresh_invoice_cost();
            }
        });
        $scope.refresh_invoice_cost();
    }

    $scope.refresh_invoice_cost = function(){
        over_all_cost = 0;
        minimal_over_all_cost = 0;
        angular.forEach($scope.invoice.products, function(value, key) {
            over_all_cost+= (value.forced_price!=0) ? value.forced_price : (value.sell_cost * value.order_number);
            minimal_over_all_cost += (value.buy_cost * value.order_number);
        });
        $scope.invoice.over_all_cost = over_all_cost;
        $scope.invoice.final_over_all_cost = over_all_cost - $scope.invoice.discount;
        $scope.invoice.minimal_over_all_cost = minimal_over_all_cost;
    }

    $scope.save_invoice = function(){
        $scope.refresh_invoice_cost();
        console.log("--------------------------------------");
        console.log($scope.invoice);
        console.log("--------------------------------------");
        $http.post("invoice-save",{invoice:$scope.invoice}).success(function(data){
            swal({
                    title: "هل أفتح لك فاتورة جديدة ?",
                    text: "تم حفظ الفاتورة فى قاعدة البيانات. هل أفتح لك فاتورة جديدة",
                    type: "success",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "نعم أفتح فاتورة جديدة !",
                    closeOnConfirm: false
                },
                function(){
                    swal("أنتظر قليلا !", "يتم فتح فاتورة جديدة.", "success");
                    window.location = "";
                });
        });

    }
});



myApp.controller("update_products",function($scope,$http) {
    $scope.cates = [];
    $scope.products_data = [];
    $scope.selected_product = {};
    $scope.filter_data = {};

    $http.get("products-list").success(function(data){
        console.log(data);
        $scope.products_data = data.products;
        $scope.cates = data.cates;
    });

    $scope.select_product = function(product){
        $scope.selected_product = product;
    }

    $scope.move_product = function(dir){
        $scope.filter_data.q = '';
        current_sort = $scope.selected_product.sort_order;
        if(dir=='up' && (current_sort>1)){
            angular.forEach($scope.products_data, function(value, key) {
                if(value.sort_order==(current_sort-1)){
                    value.sort_order= value.sort_order+1;
                }
            });
            $scope.selected_product.sort_order = current_sort - 1;
        }else if(dir=='down' && (current_sort<$scope.products_data.length) ){
            angular.forEach($scope.products_data, function(value, key) {
                if(value.sort_order==(current_sort+1)){
                    value.sort_order= value.sort_order-1;
                }
            });
            $scope.selected_product.sort_order = current_sort + 1;
        }else if(dir=='save'){
            $http.post("products-position-save",{products:$scope.products_data}).success(function(data){
                window.location = "";
            });
        }
        console.log($scope.products_data);
    }

    $scope.delete_product = function(product){
        swal({
                title: "هل أنت متأكد ؟",
                text: "هل أنت متأكد من حذف هذا المنتج من قاعدة البيانات ؟",
                type: "error",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "نعم! أحذف هذا المنتج",
                cancelButtonText: "لا! لا تحذفه",
                closeOnConfirm: false
            },
            function(){
                swal("أنتظر قليلا !", "جارى إجراء العملية !", "success");
                window.location = "delete-product/"+product.id;
            }
        );
    }
});


myApp.controller("invoice_view",function($scope,$http) {
    var php_invoices;
    $scope.search_filters = {};
    $scope.invoices_array = [];
    $scope.selected_invoice = {};

    $http.get('invoices-data').success(function(data){
        console.log(data);
        $scope.invoices_array = data;
    });

    $scope.assign_search_filters = function(string){
        $scope.search_filters.q = string;
    }

    $scope.select_invoice = function(invoice){
        $scope.selected_invoice = invoice;
    }

});


function inArray(needle, haystack) {
    var length = haystack.length;
    for(var i = 0; i < length; i++) {
        if(haystack[i] == needle) return true;
    }
    return false;
}




