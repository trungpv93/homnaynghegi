@extends('layouts.app')

@section('CUSTOM_CSS')
    <link href="{{ asset("assets/css/app.css") }}" rel="stylesheet">
@endsection

@section('CUSTOM_JS')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.14.0/lodash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.5.3/jquery.timeago.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.js"></script>
    <script type="text/javascript" src="{{ asset("assets/js/app.js") }}"></script>
@endsection

@section('before_container')
<div class="Search-Content">
  <div class="container-fluid">
    <div class="page-header" id="banner">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <form action="/urls" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" id="url" name="url" placeholder="Search or paste URL" value="" required>
            <div class="help-block">
                Note: There is a 5 second ratelimit.
              </div>
          </div>

             <button class="btn btn-default disabled" id="url-submit">
              Submit
            </button>
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

    <div class="Item">
      <div class="row">
        <div class="Vote">
          <i class="fa fa-angle-up Vote-Arrow Vote-Arrow-Up" aria-hidden="true"></i>
          <div class="Vote-Columns">
            <div class="Vote-Column">
              100
            </div>
          </div>
          <i class="fa fa-angle-down  Vote-Arrow  Vote-Arrow-Down" aria-hidden="true"></i>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object img-rounded" src="http://pipsum.com/150x150.jpg" data-holder-rendered="true" style="width: 105px;">
            </a>
          </div>
          <div class="media-body">
            <div class="Detail-Item">
              <a href="#" target="_blank">
                <h4>At this point, the Grand Theft Auto games would be far more controversial if they let you play as a law enforcement officer <span class="Span_Host"> (example.com)</span></h4>
              </a>
              <p>Description </p>
              <hr />
              <div class="rating-desc">
                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 10 views</a><span class="separator">|</span>
                <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 comments</a><span class="separator">|</span>
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

    <div class="Item">
      <div class="row">
        <div class="Vote">
          <i class="fa fa-angle-up Vote-Arrow Vote-Arrow-Up" aria-hidden="true"></i>
          <div class="Vote-Columns">
            <div class="Vote-Column">
              100
            </div>
          </div>
          <i class="fa fa-angle-down  Vote-Arrow  Vote-Arrow-Down" aria-hidden="true"></i>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object img-rounded" src="http://pipsum.com/150x150.jpg" data-holder-rendered="true" style="width: 105px;">
            </a>
          </div>
          <div class="media-body">
            <div class="Detail-Item">
              <a href="#" target="_blank">
                <h4>At this point, the Grand Theft Auto games would be far more controversial if they let you play as a law enforcement officer <span class="Span_Host"> (example.com)</span></h4>
              </a>
              <p>Description </p>
              <hr />
              <div class="rating-desc">
                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 10 views</a><span class="separator">|</span>
                <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 comments</a><span class="separator">|</span>
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

    <div class="Item">
      <div class="row">
        <div class="Vote">
          <i class="fa fa-angle-up Vote-Arrow Vote-Arrow-Up" aria-hidden="true"></i>
          <div class="Vote-Columns">
            <div class="Vote-Column">
              100
            </div>
          </div>
          <i class="fa fa-angle-down  Vote-Arrow  Vote-Arrow-Down" aria-hidden="true"></i>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object img-rounded" src="http://pipsum.com/150x150.jpg" data-holder-rendered="true" style="width: 105px;">
            </a>
          </div>
          <div class="media-body">
            <div class="Detail-Item">
              <a href="#" target="_blank">
                <h4>At this point, the Grand Theft Auto games would be far more controversial if they let you play as a law enforcement officer <span class="Span_Host"> (example.com)</span></h4>
              </a>
              <p>Description </p>
              <hr />
              <div class="rating-desc">
                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 10 views</a><span class="separator">|</span>
                <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 comments</a><span class="separator">|</span>
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

    <div class="Item">
      <div class="row">
        <div class="Vote">
          <i class="fa fa-angle-up Vote-Arrow Vote-Arrow-Up" aria-hidden="true"></i>
          <div class="Vote-Columns">
            <div class="Vote-Column">
              100
            </div>
          </div>
          <i class="fa fa-angle-down  Vote-Arrow  Vote-Arrow-Down" aria-hidden="true"></i>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object img-rounded" src="http://pipsum.com/150x150.jpg" data-holder-rendered="true" style="width: 105px;">
            </a>
          </div>
          <div class="media-body">
            <div class="Detail-Item">
              <a href="#" target="_blank">
                <h4>At this point, the Grand Theft Auto games would be far more controversial if they let you play as a law enforcement officer <span class="Span_Host"> (example.com)</span></h4>
              </a>
              <p>Description </p>
              <hr />
              <div class="rating-desc">
                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 10 views</a><span class="separator">|</span>
                <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 comments</a><span class="separator">|</span>
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

    <div class="Item">
      <div class="row">
        <div class="Vote">
          <i class="fa fa-angle-up Vote-Arrow Vote-Arrow-Up" aria-hidden="true"></i>
          <div class="Vote-Columns">
            <div class="Vote-Column">
              100
            </div>
          </div>
          <i class="fa fa-angle-down  Vote-Arrow  Vote-Arrow-Down" aria-hidden="true"></i>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object img-rounded" src="http://pipsum.com/150x150.jpg" data-holder-rendered="true" style="width: 105px;">
            </a>
          </div>
          <div class="media-body">
            <div class="Detail-Item">
              <a href="#" target="_blank">
                <h4>At this point, the Grand Theft Auto games would be far more controversial if they let you play as a law enforcement officer <span class="Span_Host"> (example.com)</span></h4>
              </a>
              <p>Description </p>
              <hr />
              <div class="rating-desc">
                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 10 views</a><span class="separator">|</span>
                <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 comments</a><span class="separator">|</span>
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

    <div class="Item">
      <div class="row">
        <div class="Vote">
          <i class="fa fa-angle-up Vote-Arrow Vote-Arrow-Up" aria-hidden="true"></i>
          <div class="Vote-Columns">
            <div class="Vote-Column">
              100
            </div>
          </div>
          <i class="fa fa-angle-down  Vote-Arrow  Vote-Arrow-Down" aria-hidden="true"></i>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object img-rounded" src="http://pipsum.com/150x150.jpg" data-holder-rendered="true" style="width: 105px;">
            </a>
          </div>
          <div class="media-body">
            <div class="Detail-Item">
              <a href="#" target="_blank">
                <h4>At this point, the Grand Theft Auto games would be far more controversial if they let you play as a law enforcement officer <span class="Span_Host"> (example.com)</span></h4>
              </a>
              <p>Description </p>
              <hr />
              <div class="rating-desc">
                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 10 views</a><span class="separator">|</span>
                <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 comments</a><span class="separator">|</span>
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

    <div class="Item">
      <div class="row">
        <div class="Vote">
          <i class="fa fa-angle-up Vote-Arrow Vote-Arrow-Up" aria-hidden="true"></i>
          <div class="Vote-Columns">
            <div class="Vote-Column">
              100
            </div>
          </div>
          <i class="fa fa-angle-down  Vote-Arrow  Vote-Arrow-Down" aria-hidden="true"></i>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object img-rounded" src="http://pipsum.com/150x150.jpg" data-holder-rendered="true" style="width: 105px;">
            </a>
          </div>
          <div class="media-body">
            <div class="Detail-Item">
              <a href="#" target="_blank">
                <h4>At this point, the Grand Theft Auto games would be far more controversial if they let you play as a law enforcement officer <span class="Span_Host"> (example.com)</span></h4>
              </a>
              <p>Description </p>
              <hr />
              <div class="rating-desc">
                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 10 views</a><span class="separator">|</span>
                <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 comments</a><span class="separator">|</span>
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

    <div class="Item">
      <div class="row">
        <div class="Vote">
          <i class="fa fa-angle-up Vote-Arrow Vote-Arrow-Up" aria-hidden="true"></i>
          <div class="Vote-Columns">
            <div class="Vote-Column">
              100
            </div>
          </div>
          <i class="fa fa-angle-down  Vote-Arrow  Vote-Arrow-Down" aria-hidden="true"></i>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object img-rounded" src="http://pipsum.com/150x150.jpg" data-holder-rendered="true" style="width: 105px;">
            </a>
          </div>
          <div class="media-body">
            <div class="Detail-Item">
              <a href="#" target="_blank">
                <h4>At this point, the Grand Theft Auto games would be far more controversial if they let you play as a law enforcement officer <span class="Span_Host"> (example.com)</span></h4>
              </a>
              <p>Description </p>
              <hr />
              <div class="rating-desc">
                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 10 views</a><span class="separator">|</span>
                <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 comments</a><span class="separator">|</span>
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

    <div class="Item">
      <div class="row">
        <div class="Vote">
          <i class="fa fa-angle-up Vote-Arrow Vote-Arrow-Up" aria-hidden="true"></i>
          <div class="Vote-Columns">
            <div class="Vote-Column">
              100
            </div>
          </div>
          <i class="fa fa-angle-down  Vote-Arrow  Vote-Arrow-Down" aria-hidden="true"></i>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object img-rounded" src="http://pipsum.com/150x150.jpg" data-holder-rendered="true" style="width: 105px;">
            </a>
          </div>
          <div class="media-body">
            <div class="Detail-Item">
              <a href="#" target="_blank">
                <h4>At this point, the Grand Theft Auto games would be far more controversial if they let you play as a law enforcement officer <span class="Span_Host"> (example.com)</span></h4>
              </a>
              <p>Description </p>
              <hr />
              <div class="rating-desc">
                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 10 views</a><span class="separator">|</span>
                <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 comments</a><span class="separator">|</span>
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

    <div class="Item">
      <div class="row">
        <div class="Vote">
          <i class="fa fa-angle-up Vote-Arrow Vote-Arrow-Up" aria-hidden="true"></i>
          <div class="Vote-Columns">
            <div class="Vote-Column">
              100
            </div>
          </div>
          <i class="fa fa-angle-down  Vote-Arrow  Vote-Arrow-Down" aria-hidden="true"></i>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object img-rounded" src="http://pipsum.com/150x150.jpg" data-holder-rendered="true" style="width: 105px;">
            </a>
          </div>
          <div class="media-body">
            <div class="Detail-Item">
              <a href="#" target="_blank">
                <h4>At this point, the Grand Theft Auto games would be far more controversial if they let you play as a law enforcement officer <span class="Span_Host"> (example.com)</span></h4>
              </a>
              <p>Description </p>
              <hr />
              <div class="rating-desc">
                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 10 views</a><span class="separator">|</span>
                <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 comments</a><span class="separator">|</span>
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

    <ul class="pager">
      <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> Previous</a></li>
      <li><a href="#">Next <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
    </ul>
  </div>
</div>
@endsection
