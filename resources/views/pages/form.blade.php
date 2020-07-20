<div class="col-md-7 col-sm-offset-0 col-sm-6 col-xs-offset-1 col-xs-10">
    <div class="contact-form">
        @if (Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>
                    {{Session::get('success')}}
                </strong>
            </div>
        @endif
        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
          </div>
        <form role="form" 
        method="post" action="{{route('user-form.store')}}" 
        id="form_id">
            @csrf

            <div class="col-md-4">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
            </div>

            <div class="col-md-4">
                <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
            </div>

            <div class="col-md-4">
                <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone Number" value="{{ old('phone') }}" maxlength="10">
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
            </div>

            <div class="col-md-12">
                <textarea name="message" class="form-control" placeholder="Message" id="message" rows="6">{{ old('message') }}</textarea>
                    @if ($errors->has('message'))
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    @endif
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="contact-button" id="submit">Send Message</button>
            </div>

        </form>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    // $('#form_id').on('submit',function(event){
    //     event.preventDefault();
    //     name = $('#name').val();
    //     email = $('#email').val();
    //     mobile_number = $('#phone').val();
    //     message = $('#message').val();
    //     $.ajax({
    //       url: "{{ route('user-form.store') }}",
    //       type:"POST",
    //       data:{
    //         "_token": "{{ csrf_token() }}",
    //         name:name,
    //         email:email,
    //         phone:mobile_number,
    //         message:message,
    //       },
    //       success:function(response){
    //         console.log(response.success);
    //         if(response.success){
    //             console.log('response.success');
    //            $("#success").find("strong").append(response.success); 
    //            $('#success').show();
    //            $("#success").trigger('reset');
    //         }
    //       },
    //       error:function(err){
    //         // $.each(resp.errors, function(key, val) {
    //         // // var json = JSON.stringify(err)
    //         // // alert(json.errors);
    //         // var json = $.parseJSON(err);
    //         // alert(json.error);
    //         // console.log('errors');
    //         // console.log(err.errors);
    //         console.log(err);
    //       }
    //      });
    // });

});
</script>
