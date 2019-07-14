//console.log('custom.js!');
$(document).ready(function () {

    //console.log('welcome jquery');
    $('select[name="city_id"]').on('change',function () {
      // console.log('welcome jquery changed');

        var cityid=$(this).val();
        if(cityid)
        {
          // console.log(cityid);
            $.ajax({
                url:'/getcityareas/'+cityid,
                type:'GET',
                dataType:'json',
                success:function (data) {
                    //console.log(data);
                    $('select[name="area_id"]').empty();
                    $.each(data,function (key,value) {
                        $('select[name="area_id"]')
                            .append('<option value="'+key+'">'+value+'</option>')


                    });

                }

            });

        }
        else{
            $('select[name="area_id"]').empty();
            //$('select[name="palaceid"]').empty();
        }

    })

    $('select[name="type"]').on('change',function () {






          $type=  $('select[name="type"]').val();
           //console.log($type);
           if($type==1)
          {
              //console.log('hhhhhhh'+$type);
              $('#hotel').css('display','block');
              $('#palace').css('display','none');
              $('#villa').css('display','none');
              $('#garden').css('display','none');
              $('#restaurent').css('display','none');
          }
           if($type==2)
          {
              //console.log('hhhhhhh'+$type);
              $('#palace').css('display','block');
              $('#hotel').css('display','none');
              $('#villa').css('display','none');
              $('#garden').css('display','none');
              $('#restaurent').css('display','none');
          }
          if($type==3)
          {
              //console.log('hhhhhhh'+$type);
              $('#palace').css('display','none');
              $('#hotel').css('display','none');
              $('#villa').css('display','block');
              $('#garden').css('display','none');
              $('#restaurent').css('display','none');
          }
          if($type==4)
          {
              //console.log('hhhhhhh'+$type);
              $('#palace').css('display','none');
              $('#hotel').css('display','none');
              $('#villa').css('display','none');
              $('#garden').css('display','block');
              $('#restaurent').css('display','none');
          }
          if($type==5)
          {
              //console.log('hhhhhhh'+$type);
              $('#palace').css('display','none');
              $('#hotel').css('display','none');
              $('#villa').css('display','none');
              $('#garden').css('display','none');
              $('#restaurent').css('display','block');
          }





        else{

        }

    })
})
