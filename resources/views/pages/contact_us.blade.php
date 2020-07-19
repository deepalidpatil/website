
<div class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <h3>Contact Us</h3>
          </div>
        </div>
        <div class="col-md-7 col-sm-offset-0 col-sm-6 col-xs-offset-1 col-xs-10">
          <div class="contact-form">
            @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
            <form role="form" method="post" action="{{route('user-form.store')}}">
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
                <textarea name="message" class="form-control" placeholder="Message" rows="6">{{ old('message') }}</textarea>
                @if ($errors->has('message'))
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                @endif
              </div>
              <div class="col-md-12 text-center">
                <button type="submit" class="contact-button">Send Message</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-offset-1 col-md-4 col-sm-offset-1 col-sm-5 col-xs-offset-1 col-xs-10">
          <div class="address">
            <h4>Address</h4>
            <p>123, This Appartment,<br>
              Near Ocean Street<br>
              New York<br>
            <div class="email"><i class="fa fa-at"></i>hello@w3template.com<br>
              <i class="fa fa-mobile"></i>123 456 789</div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>