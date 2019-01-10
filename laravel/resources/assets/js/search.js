$(document).ready(function(){
    $('#client_search').keyup(function(){
        // console.log($('#client_search').val());
        $.ajax({
            url: "http://clients.test/client/search",
            dataType: "json",
            type: "post",
            data: {
                search: $('#client_search').val()
            },
            headers: {
                'X-CRSF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(result){
                var items = '';

                for (var i in result){
                    var id = result[i]['id'];

                    items += '<tr>';
                    items += '<td>' + id + '</td>';
                    items += '<td><a href="http://clients.test/client/' + id +'">' + result[i]['subject'] + '</a></td>';
                    items += '<td>' + ((result[i]['made'] == 1) ? 'sim' : 'não') + '</td>';
                    items += '<td>' + result[i]['description'] + '</td>';

                    items += '<td>';
                    items += '<a class="btn btn-success" href="http://clients.test/client' + id + '/edit">Editar</a>'
                    items += '<a class="btn btn-danger">Deletar</a>'
                    items += '</td>';
                    
                    items += '</tr>';
                }
                $('#client_list').html(items);
            }
        })
    });
});