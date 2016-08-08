/**
 * Created by Ralph on 8/7/2016.
 */
var title = ''
var setLink = ''
var modal = $('#ModalView')
var content = $('#content')

$(function(){
    $('.mdl-navigation__link').click(function() {
        event.preventDefault()
        title = $(this).attr('data-title')
        setLink = $(this).attr('href')
        if ($(this).attr('data-title') !== undefined) {
            modal.removeData('bs.modal')
            content.load(setLink + 'list')
            $('#pan-title').html(title)
            modal.find('.modal-body').html('')
        }
    });
});


$('#btnNew').click(function (event) {
    event.preventDefault()
    $.get(setLink+'create', function(html){
        modal.find('.modal-body').html(html)
        modal.modal('show')
    })
})


modal.on('show.bs.modal', function (event) {
    modal.find('.modal-title').text(title)
    modal.find('#frm').attr('action',setLink+'create')
})

modal.on('hidden.bs.modal', function () {
    modal.removeData('bs.modal')
    content(setLink + 'list')
})

$(function() {
    $("#frm").submit(function (event) {
        event.preventDefault()
        var form = $(this)
        var data = new FormData(this)

        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: data,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                modal.modal('toggle');
                content.load(setLink + 'list');
            },
            error: function (xhr, textStatus, errorThrown) {
            }
        })
    })
})

$('.pagination a').on('click', function (event) {
    event.preventDefault()
    content.load($(this).attr('href'))
})

function DeleteRec(ln) {
    content.load(ln)
}