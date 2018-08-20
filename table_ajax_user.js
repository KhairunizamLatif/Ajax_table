$(document).ready(function(){
    function fetch_data()
    {
        $.ajax({
            url:"find.php",
            method:"POST",
            success:function(data){
                $('#myTable').html(data);
            }
        });
    }
    fetch_data();
    $(document).on('click', '#button', function(){
        var code = $("#code").val();
        var name = $("#name").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var classes = $("#classes").val();
        var classes_code = $("#classes_code").val();
        var status = $("#status").val();

        $.ajax({
            url:"add_user.php",
            method:"POST",
            data:{code:code, name:name, username:username, password:password, classes:classes, classes_code:classes_code, status:status },
            dataType:"text",
            success:function(data)
            {
                alert(data);
                fetch_data();
            }
        })
    });

    $(document).on('click', '.btn_delete', function(){
        var id=$(this).data("id8");
        if(confirm("Are you sure you want to delete this?"))
        {
            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{id:id},
                dataType:"text",
                success:function(data){
                    alert(data);
                    fetch_data();
                }
            });
        }
    });
});