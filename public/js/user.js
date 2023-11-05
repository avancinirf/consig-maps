$(function() {

    $('#userTable').DataTable({
        'lengthMenu': [[10, 20, 50, -1], [10, 20, 50, 'All']],
        processing: true,
        serverSide: true,
        order: [[1, 'asc']],
        ajax:{
            url: $('#userTable').data('href'),
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type: "POST",
        },
        columns: [
            { 'data': 'id', title: 'ID', name: 'id' },
            { 'data': 'name', title: 'Nome', name: 'name' },
            { 'data': 'email', title: 'E-mail', name: 'email' },
            { 'data': 'email_verified_at', title: 'Verificado em', name: 'email_verified_at' },
            { 'data': 'admin', title: 'Admin', name: 'admin' },
            { 'data': 'actions', title: 'Ações', name: 'actions', orderable: false, searchable: false },
        ],
        columnDefs: [
            { className: 'text-center', targets: [0,5] },
            { width: "50px", targets: 0 },
            { width: "100px", targets: 5 },
            {
                targets: 3,
                render: function(data, type, row) {
                    if (type === 'sort' || type === 'type') {
                        return data;
                    }
                    return moment(data).format('DD/MM/YYYY HH:mm');
                }
            }
        ],
    }).on('draw', function () {
        addHandlers();
    });

    const addHandlers = () => {
        $('.btnVerUser').on('click', function() {
            const id = $(this).data('id');
            showUser(id);
        });
    }

    const showUser = (id) => {
        console.log(id)
    }

});

//# sourceURL=js/user.js
