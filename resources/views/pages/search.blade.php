{{--Подключние шапки--}}
@include('include.head')

<div class="container">
    <div class="well well-sm">
        <div class="form-group">
            <div class="input-group input-group-md">
                <div class="icon-addon addon-md">
                    <input type="text" placeholder="Что желаете найти?" class="form-control" v-model="query">
                </div>
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" @click="search()" v-if="!loading">Поиск</button>
                    <button class="btn btn-default" type="button" disabled="disabled" v-if="loading">Ищем...</button>
                </span>
            </div>
        </div>
    </div>
    <div class="alert alert-danger" role="alert" v-if="error">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        @{{ error }}
    </div>
    <div id="posts" class="row list-group">
        <div class="item col-xs-4 col-lg-4" v-for="post in posts">
            <div class="thumbnail">
                <img class="group list-group-image" :src="post.thumbnail" alt="@{{ post.title }}" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">@{{ post.title }}</h4>
                    <p class="group inner list-group-item-text">@{{ post.content }}</p>

                </div>
            </div>
        </div>
    </div>
</div>

{{--Подклчючение подвала--}}
@include('include.footer')