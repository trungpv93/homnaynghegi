@if(!empty($meta['title']))
    <title>{{ $meta['title'] . ' - ' . trans('app.name') }}</title>
@else
    <title>{{ trans('app.name') }}</title>
@endif
    <!--Facebook Metadata /-->
@if(!empty($meta['image']))
    <meta property="og:image" content="{{ url($meta['image']) }}"/>
@else
    <meta property="og:image" content="{{ url('/assets/images/default-logo.png') }}"/>
@endif
@if(!empty($meta['description']))
    <meta property="og:description" content="{{ str_limit($meta['description'], $limit = 100, $end = '...') }}"/>
@else
    <meta property="og:description" content="{{ trans('app.description') }}"/>
@endif
@if(!empty($meta['title']))
    <meta property="og:title" content="{{ $meta['title'] }}"/>
@else
    <meta property="og:title" content="{{ trans('app.name') }}"/>
@endif
    <!--Google+ Metadata /-->
@if(!empty($meta['title']))
    <meta itemprop="name" content="{{ $meta['title'] }}">
@else
    <meta itemprop="name" content="{{ trans('app.name') }}">
@endif
@if(!empty($meta['description']))
    <meta itemprop="description" content="{{ str_limit($meta['description'], $limit = 100, $end = '...') }}"/>
@else
    <meta itemprop="description" content="{{ trans('app.description') }}"/>
@endif
@if(!empty($meta['image']))
    <meta itemprop="image" content="{{ url($meta['image']) }}"/>
@else
    <meta itemprop="image" content="{{ url('/assets/images/default-logo.png') }}"/>
@endif
    <!-- Twitter Metadata /-->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@_trungpv"/>
@if(!empty($meta['title']))
    <meta name="twitter:title" content="{{ $meta['title'] }}">
@else
    <meta name="twitter:title" content="{{ trans('app.name') }}">
@endif
@if(!empty($meta['description']))
    <meta name="twitter:description" content="{{ str_limit($meta['description'], $limit = 100, $end = '...') }}"/>
@else
    <meta name="twitter:description" content="{{ trans('app.description') }}"/>
@endif
@if(!empty($meta['image']))
    <meta name="twitter:image" content="{{ url($meta['image']) }}"/>
@else
    <meta name="twitter:image" content="{{ url('/assets/images/default-logo.png') }}"/>
@endif
    <meta name="twitter:domain" content="homnaynghegi.com">
    <meta name="author" content="trungpv - trungpv93@outlook.com" />
