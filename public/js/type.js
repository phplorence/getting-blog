/**
 * Created by vuongluis on 7/28/2018.
 */
$(document).ready(function () {
    $('#typePerfumeTable').dataTable({
        "pageLength": 18,
        "lengthMenu": [[5,10,15,-1], [5,10,15,'All']],
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
        "processing": true,
        "serverSide": true,

        "ajax": {
            url: '/quan-tri/nuoc-hoa/loai-nuoc-hoa/loading_typeperfume',
            type: "GET"
        },

        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "manipulation", "render": function ( id) {
                return '<div class="text-center"><a onclick= "showEditTypePerfume('+id+')"><img src="/img/icon-control/icon_edit.svg"  width="24px" height="24px" alt="Update Icon"></a>'
                +'<span>  </span>'+'<a href="/quan-tri/nuoc-hoa/loai-nuoc-hoa/xoa/'+id+'" onclick="deleteTypePerfumeFunction('+id+')"><img src="/img/icon-control/icon_delete.svg"  width="24px" height="24px" alt="Update Icon"></a></div>';
            }}
        ],

        "language": {
            "lengthMenu": "Hiển thị các bản ghi _MENU_ trên mỗi trang",
            "zeroRecords": "Không tìm thấy - xin lỗi",
            "info": "Hiển thị _START_ đến _END_ trong số _TOTAL_ mục",
            "infoEmpty": "Không có bản ghi nào",
            "search": "Tìm kiếm: ",
            "paginate": {
                "previous": "Trước",
                "next": "Sau"
            },
            "infoFiltered": "(được lọc từ tổng số bản ghi _MAX_)"
        }

    });
});
