@extends('layouts.app')

@section('CUSTOM_CSS')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="{{ asset("assets/css/app.css") }}" rel="stylesheet">
@endsection

@section('CUSTOM_JS')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.14.0/lodash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.5.3/jquery.timeago.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript" src="{{ asset("assets/js/app.js") }}"></script>
    @if(session()->has('msg'))
    <script type="text/javascript">
      toastr.success('{{ session()->get('msg') }}')
    </script>
    @endif
    @if ($errors->has('url'))
        <script type="text/javascript">
          toastr.error('{{ $errors->first('url') }}')
        </script>
    @endif
    @if ($errors->has('g-recaptcha-response'))
        <script type="text/javascript">
          toastr.error('{{ $errors->first('g-recaptcha-response', 'The Human Test field is required.') }}')
        </script>
    @endif
@endsection

@section('before_container')
<div class="Search-Content">
  <div class="container-fluid">
    <div class="page-header" id="banner">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <form action="{{ url('/url') }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
            <input type="url" class="form-control" id="url" name="url" placeholder="Search or paste URL" value="" required>
            @if ($errors->has('url'))
                <span class="help-block">
                    <strong>{{ $errors->first('url') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
            {!! app('captcha')->display()!!}
            @if ($errors->has('g-recaptcha-response'))
                <span class="help-block">
                    <strong>{{ $errors->first('g-recaptcha-response', 'The Human Test field is required.') }}</strong>
                </span>
            @endif
          </div>
          <button class="btn btn-primary " id="url-submit"><i class="fa fa-btn fa-link" aria-hidden="true"></i>Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">

    @foreach ($posts as $key => $post)
      <div class="Item">
        <div class="row">
          <div class="Vote">
            <i class="fa fa-angle-up Vote-Arrow Vote-Arrow-Up" aria-hidden="true"></i>
            <div class="Vote-Columns">
              <div class="Vote-Column">
                0
              </div>
            </div>
            <i class="fa fa-angle-down  Vote-Arrow  Vote-Arrow-Down" aria-hidden="true"></i>
          </div>
          <div class="media">
            <div class="media-left">
              <a href="{{ $post->meta->where('key', 'url')->first()->value }}">
                <img class="media-object img-rounded" src="{{ $post->meta->where('key', 'image')->first()->value }}" data-holder-rendered="true" style="width: 105px;background-color: #777;">
              </a>
            </div>
            <div class="media-body">
              <div class="Detail-Item">
                <a href="{{ $post->meta->where('key', 'url')->first()->value }}" target="_blank">
                  <h4>{{ $post->title }} <span class="Span_Host"> ({{ $post->meta->where('key', 'providerUrl')->first()->value }})</span></h4>
                </a>
                <p>{{ $post->body }} </p>
                {!! $post->meta->where('key', 'code')->first()->value !!}
                <hr />
                <div class="rating-desc">
                  <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> {{ $post->view }} views</a><span class="separator">|</span>
                  <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 0 comments</a><span class="separator">|</span>
                  <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> share </a><span class="separator">|</span>
                  <a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i> save </a><span class="separator">|</span>
                  <a href="#"><i class="fa fa-ban" aria-hidden="true"></i> hide </a><span class="separator">|</span>
                  <a href="#"><i class="fa fa-flag" aria-hidden="true"></i> report </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  	@endforeach

  	<center>{!! $posts->render() !!}</center>
  </div>
</div>
@endsection
