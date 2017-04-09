@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('/bower_components/metisMenu/dist/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/bower_components/sweetalert/sweetalert.css') }}">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/book-list.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/book-detail.css') }}" rel="stylesheet">
@endsection

@section('content')
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="content-detail">
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="polaroid" src="{{ $book->image }}" title="{{ $book->title }}"/>
                        </div>
                        <div class="col-sm-5">
                            <div class="productinfo">
                                <h2>{{ $book->title }}</h2>
                                <h2>{{ $book->price }}</h2>
                                <div class="lead">
                                    <div id="stars-existing" class="starrr" data-rating="{{ $value }}"></div>
                                </div>
                                <p><b>{{ trans('book.author') }}</b>{{ $book->author }}</p>
                                <p><b>{{ trans('book.category') }}</b>{{ $category }}</p>
                                <br>
                                <a class="btn btn-app">
                                    <span class="badge bg-green">{{ count($book->reviews) }}</span>
                                    <i class="fa fa-book"></i>{{ trans('book.review') }}
                                </a>
                                <a class="btn btn-app">
                                    <span class="badge bg-red">{{ count($likes) }}</span>
                                    <i class="fa fa-heart-o"></i>{{ trans('book.like') }}
                                </a>
                                <a class="btn btn-app">
                                    <span class="badge bg-teal">{{ count($book->markReads) }}</span>
                                    <i class="fa fa-bookmark"></i>{{ trans('book.mark-read') }}
                                </a>
                            </div><!--/product-information-->
                        </div>
                        <div class="col-sm-3 medal">
                            <label class="score">{{ $score }}</label>
                        </div>
                    </div>
                    <br/>
                    <div class="recommended_items">
                        <h2 class="title text-center">{{ trans('book.information') }}</h2>
                        <h3>{{ $book->title }}</h3>
                        <p>{{ $book->description }}</p>
                        <br/>
                    </div>
                    <table class="table table-condensed">
                        <tr class="info">
                            <td>{{ trans('book.price') }}</td>
                            <td><p>{{ $book->price }}</p></td>
                        </tr>
                        <tr class="active">
                            <td>{{ trans('book.author') }}</td>
                            <td><p>{{ $book->author }}</p></td>
                        </tr>
                        <tr class="info">
                            <td>{{ trans('book.number-page') }}</td>
                            <td><p>{{ $book->number_pages }}</p></td>
                        </tr>
                        <tr class="active">
                            <td>{{ trans('book.publish-date') }}</td>
                            <td><p>{{ $book->publish_date }}</p></td>
                        </tr>
                        <tr class="info">
                            <td>{{ trans('book.category') }}</td>
                            <td><p>{{ $category }}</p></td>
                        </tr>
                    </table>
                    <br/>
                </div>

            </div>
            <div class="col-md-3 text-center">
                <h2 class="title">{{ trans('book.same') }}</h2>
                @foreach ($sames as $same)
                    <div class="polaroid-right">
                        <div class="saishou margin-top">
                            <img class="sidebar-right"
                                 name="image" src="{{ $same->image }}" title="{{ $same->title }}"/>
                        </div>
                        <div class="saigo margin-top" style="display: none">
                            <a href="{{ route('book.show', $same->id) }}"
                               class="margin btn btn-custom btn-success green">
                                <i class="fa fa-book fa-fw"></i>@lang('sidebar.show')
                            </a>
                            <a href="" class="btn btn-custom btn-success green"><i
                                        class="fa fa-pencil fa-fw"></i>@lang('sidebar.review')
                            </a>
                        </div>
                        <h2>{{ $same->price }}</h2>
                        <h4 class="margin-bottom">{{ $same->title }}</h4>
                    </div>
                @endforeach
                <div class="pull-right pagination-sm">
                    {{ $sames->links() }}
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src='{{ asset('/js/book-detail.js') }}'></script>
@endsection
