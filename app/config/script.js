$(function() {


    $('.edit').on('click',function(){

        const id =$(this).data('id');

        $.ajax({
            url:"http://kiosk.vanjogja.com/public/Admin/edit",
            data:{id :id},
            method:'post',
            dataType:'json',
            success:function(data){
                $('#tgl_agenda').val(data.tgl_agenda);
                $('#jam').val(data.jam);
                $('#kegiatan').val(data.kegiatan);
                $('#tempat').val(data.tempat);
                $('#id').val(data.id);
            }
        })
    });

    $('.upload').on('click',function(){

        const id =$(this).data('id');
        
        $.ajax({
            url:"http://localhost:8000/kioska_v.1.1/public/Home/ambilData",
            data:{id :id},
            method:'post',
            dataType:'json',
            success:function(data){
                $('#satu').html(data.tgl_agenda)
            }

        })

    })










} )