function validateEmail()
{  
    regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test($("#correo").val())){
        alert('email no permitido');    
    }
    else{        
        if(($('input[name="correos[]"]').length)===0){
            var txt = '<li><input name="correos[]" class="inpco" readonly="readonly" style="border:0px" value="'+ $("#correo").val() +'"></li>';    
            $("#lstCorreos").append(txt);            
            document.getElementById('correo').value='';
        }else
        {
            ban=false;
            $('input[name="correos[]"]').each(function() {

                if(($(this).val())==$("#correo").val()){
                    ban=true;
                }              
            });
            if(ban){
                alert('el email ya esta en la lista de destinatarios');
            }else
            {
                var txt = '<li><input name="correos[]" class="inpco" readonly="readonly" style="border:0px" value="'+ $("#correo").val() +'"></li>';
                $("#lstCorreos").append(txt);              
                document.getElementById('correo').value='';
            }
        }      
    }
}
