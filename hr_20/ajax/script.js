$(document).ready(function(){
    $(".myform").submit(function(e){
        e.preventDefault();
        var email  = $("#email").val();
        var mobile  = $("#mobile").val();
        var pass  = $("#pwd").val();
        var name  = $("#name").val();

        var user_data = {
            "name":name,
            "email":email,
            "mobile":mobile,
            "password":pass,
            "type":"insert_data"
        }

        $.ajax({
           method:"POST",
           url:'server.php',
           data:user_data,
           success:function(val){
               console.log(val);
               if(val == "Data inserted"){
                show_notification_fun("Data Inserted succesfully");
                $(".myform")[0].reset();
               }
               load_Server_Data();
           }
        })


    });

    function load_Server_Data(){
        $.ajax({
            url:"server.php",
            method:"POST",
            data : {
                'type':"get_ser_data"
            },
            success:function(res){
                console.log(res);
                var data = JSON.parse(res);
                data= data.mydata;
                var html = "";
                data.map(function(e){
                    html+= `<tr>
                    <td>`+e.name+` </td>
                    <td>`+e.mobile+`</td>
                    <td>`+e.email+`</td>
                    <td><button class="btn btn-danger delete_btn" data-btnid=`+e.id+` title="Delete record"><i class="fa fa-trash"></i> </button> <button class="btn btn-primary" title="edit record"><i class="fa fa-pencil"></i></button></td>
                  </tr>`;
                });
                $(".my_ser_data").html(html);
            }
        });
    }
    load_Server_Data();


    function show_notification_fun(content){
        $(".not_msg").show();
        $(".not_msg").text(content);
        setTimeout(() => {
            $(".not_msg").hide();  
        }, 5000);
    }


    $(document).on('click','.delete_btn',function(){
        var del_id = $(this).attr("data-btnid");
        $.ajax({
            method:'POST',
            url:"server.php",
            data:{
                'type':"delete_rec",
                'delete_id':del_id
            },
            success:function(res){
                console.log(res);
                if(res == "data deleted"){
                    show_notification_fun("Data deleted successfuly");
                    load_Server_Data();
                }
            }
        })
    })
    
    // $(".delete_btn").click(function(){
    //         alert($(this).attr("data-btnid"));
    // });
});