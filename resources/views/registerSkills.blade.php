@extends('layouts.app')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">【スタッフ専用】スキル追加用ページ</div>
                <div class="panel-body">
                    <!-- バリデーションエラーの表示に使用-->
                    <!-- バリデーションエラーの表示に使用-->

                    <!-- 本登録フォーム -->
                    <form action="{{ url('registerSkills') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- スキルの名前 -->
                        <div class="form-group">
                          <div class="">
                            <label for="book" class="col-sm-3 control-label">Skill Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="item_name" id="book-name"class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="book" class="col-sm-3 control-label">Skill Category</label>
                          <div class="col-sm-6">
                              <select style="font-size:20px;" class="" name="">
                                <option value="1">語学</option>
                                <option value="2">プログラミング</option>
                                <option value="3">ビジネス</option>
                                <option value="4">ライフハック</option>
                                <option value="5">受験</option>
                                <option value="6">試験</option>
                              </select>
                          </div>
                        </div>
                        <!-- 本 登録ボタン -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="glyphicon glyphicon-plus"></i> Save
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">現在登録されているスキル一覧</div>
            <div class="panel-body">

            </div>
          </div>
        </div>
    </div>
</div>
@endsection
