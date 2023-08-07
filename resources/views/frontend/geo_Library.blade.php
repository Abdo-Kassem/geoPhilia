@extends('layouts.site')

@section('content')
    <!-- Start Breadcrumb
                                                                                ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>المكتبة الجيولوجيَّــة</h1>
                    <p>
                        رفُــفٌ مكتبيَّة صُنِعَت من صخور الطبيعة، وزُينَت كذلك، لكِنَها لم تُزيَن بمعادن ثمينه ولا مجوهرات نفيسه، إنما زُينَت بالعلم، وتُوِجَت بتاج المعرفة... تاجُ الوقار، وقُدِمَت كُـتُـبـُــها وكُـتـيّـبـــاتُـها على طبقٍ من ماس، مُحلاةٌ بـلآلِـئ تـتـوهَّـــجُ بمعلوماتِها القيمة، فقط... لأنها مُقدَمه لك!
                    </p>
                    <hr>
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">الرئيسية</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

 <!-- Start Blog-->

    <div class="blog-area full-width default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    @if ($files->count() > 0)
                        @isset($files)
                            @foreach ($files as $file)
                                <div class="col-md-6 col-sm-6 equal-height">
                                    <div class="item">
                                        <div class="info">
                                            <h4>
                                                {{ $file->fileName }}
                                            </h4>
                     
                                            <p>
                                                {{ $file->comment }}
                                            </p>
                                            <div>
                                                <a class='btn btn-primary file_operation' href="{{route('file.download',$file->id)}}"><i class="fas fa-download"> تنزيل </i></a>
                                                <a class='btn btn-success file_operation' href="{{route('file.show',$file->id)}}" target="_blank"><i class="fas fa-eye"> عرض </i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            @endforeach
                        @endisset




                        <div class="float-center">
                            {{ $files->links() }}
                        @else
                            <div class="col-5 mb-5">
                                <h2 style="text-align: center; margin-bottom:30px;">@lang('لا يوجد بيانات ')</h2>
                            </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- end Blog-->
    {{--                                                                          ============================================= -->
    <div class="blog-area full-width default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    @if ($files->count() > 0)
                        @isset($files)
                        <table class="table ">
                            <thead >
                                <tr class='table-library'>
                                    <th scope="col">#</th>
                                    <th scope="col">اسم الملف</th>
                                    <th scope="col">التوضيح</th>
                                    <th scope="col">الاجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($files as $file)
                                <tr>
                                    <td>{{++$loop->index}}</td>
                                    <td>{{$file->fileName}}</td>
                                    <td>{{$file->comment}}</td>
                                    <td>
                                        <a class='btn btn-primary file_operation' href="{{route('file.download',$file->id)}}">تنزيل</a>
                                        <a class='btn btn-success file_operation' href="{{route('file.show',$file->id)}}" target="_blank">عرض</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        @endisset


                        <div class="float-center">
                            {{ $files->links() }}
                        @else
                            <div class="col-5 mb-5">
                                <h2 style="text-align: center; margin-bottom:30px;">@lang('لا يوجد بيانات ')</h2>
                            </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
--}}
@endsection
