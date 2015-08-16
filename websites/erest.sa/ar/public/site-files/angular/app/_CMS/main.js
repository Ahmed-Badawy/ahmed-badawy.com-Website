var myApp = angular.module('myApp',[]);

myApp.controller("cates_control",function($scope,$http) {

    $scope.gene_data = {};
    $scope.q = "";
    $scope.edited_elm = {};

    $scope.gene_data.elements = elms;
    $scope.gene_data.cates = cates;


    $scope.q = {};


    //console.log($scope.gene_data.elements);

    //$scope.get_data = function(){
    //    $http.get("cates-data").success(function(data){
    //        console.log(data);
    //        $scope.gene_data.elements = data.elements;
    //        $scope.gene_data.cates = data.cates;
    //        $scope.gene_data.menus = data.menus;
    //    });
    //};
    //$scope.get_data();


    //$scope.set_search = function(n){
    //    //alert("he");
    //    $scope.q.cate_name = n.cate_name;
    //}





    $scope.activate_delete_confirmation = function(type,elm_id){
        var href = "delete/"+type+"/"+elm_id;
        var r = confirm("هل أنت متأكد من إلغاء العنصر ؟");
        if (r == true) {
            setTimeout(function(){
                window.location.assign(href)
            }, 1000);
        }
        return false;
    }

    $scope.template_url = "";
    $scope.save_menu_items = function(menu_data){
        $http.post("save-menu-items",{data: menu_data}).success(function(data){

        });
        swal('عملية ناجحة','نجحت عملية حفظ البيانات','success');
    }

    $scope.new_item = {};
    $scope.add_menu_item = function(){
        $scope.gene_data.menus.push($scope.new_item);
        $scope.new_item = {};
        $scope.save_menu_items($scope.gene_data.menus);
        //$scope.get_data();
    }
    $scope.remove_menu_item = function(index){
        $scope.gene_data.menus.splice(index,1);
    }

    $scope.get_template = function(link){
        $scope.template_url = link;
        $scope.get_data();
    }

});


