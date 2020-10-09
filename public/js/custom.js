
function objectifyForm(formArray) {
    var returnArray = {};
    for (var i = 0; i < formArray.length; i++){
        var inputname = formArray[i]['name'];
        if(inputname != undefined) {
            if(inputname.indexOf('[]') >= 0) {
                if(!$.isArray(returnArray[inputname]))
                    returnArray[inputname] = [];
                returnArray[inputname].push(formArray[i]['value']);
            } else {
                returnArray[inputname] = formArray[i]['value'];
            }
        }
    }
    return returnArray;
}

var allow = false;
$('.ajax-form').submit(function(e) {

    if(allow == false) {

        e.preventDefault()

        $(this).find('input').removeClass('is-invalid');
        $(this).find('.invalid-feedback').remove();
        
        // files = $(this).find('input[type=file]').eq(0);
        // data = $(this).serializeArray();
        // data.push({
        //     name: files.attr('name'), 
        //     value: files.val()
        // })
        // console.log(data);
        // data = objectifyForm(data);
        // console.log(data);
        var o = $(this);
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function(res){
                if(res.status == 'failed') {
                    $.each(res.input, function(k, v){
                        console.log(v);
                        i = $(':input[name=' + k + ']')
                        i.addClass('is-invalid');
                        i.parent().append('<div class="invalid-feedback" style="display: block">' + v + '</div>');
                    });
                } else if(res.status == 'success') {
                    console.log(o.attr('result-modal'));
                    if(o.attr('result-modal') == undefined) {
                        o.append('<input type="hidden" name="pass" value="pass"/>');
                        allow = true;
                        o.submit();
                    }
                    else 
                        $(o.attr('result-modal')).modal('toggle');
                }
            },
        });

    }

})
