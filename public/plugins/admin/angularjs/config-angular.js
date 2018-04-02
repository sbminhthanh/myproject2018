var app = angular.module('App-Angular', [],function($interpolateProvider){
    // Thay đổi ký hiệu mặc dịnh {{ }} trong angular thành <% %>
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.controller('Gallery_Controller', function ($scope, $http) {
    // Start Controller Gallery
        $scope.btn_gallery = "Thêm";

        // Load Dữ liệu
        $scope.Load_Gallery = function () {
            $http.get("admin/api/gallery/list")
            .then(function (data) {
                $scope.data_gallery = data.data;
                console.log(data);
                $('.ichack-input input[type="checkbox"].minimal, .ichack-input input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'icheckbox_minimal-blue'
                });
            });
        }
        // End Gallery
        
        // Start Insert Gallery
        $scope.Action_Gallery = function () {
            $http.post("admin/api/gallery/add",{
                'id'                : $scope.g_id,
                'name'              : $scope.g_name,
                'description'       : $scope.g_description,
                'sticky'            : $scope.g_sticky,
                'status'            : $scope.g_status,
                'images'            : $('input[ng-model="g_images"]').val(),
                'seo_title'         : $scope.g_seo_title,
                'slug'              : $scope.g_slug,
                'meta_description'  : $scope.g_meta_description,
                'focus_keyword'     : $scope.g_focus_keyword,
                'meta_keyword'      : $scope.g_meta_keyword,
                'meta_title'        : $scope.g_meta_title
            })
            .then(function (result) {
                console.log($('input[ng-model="g_images"]').val());
                if($.isEmptyObject(result.data.error)){
                    swal(
                        'Thông báo',
                        result.data.success,
                        'success'
                        );
                    Load_Gallery();
                }else{
                    swal(
                        'Thông báo',
                        result.data.error,
                        'error'
                        )
                }

            });
        }
        // End Start Gallery

      
    //   End Controller
});
// -----------------------------------------------------------------