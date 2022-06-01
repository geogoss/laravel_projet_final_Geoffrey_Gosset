<section class="w-50 mx-auto mb-5">
    <h1 class="text-center my-5"><a class="text-decoration-none text-dark  " href="/backBlog">Voir tous les articles
            👉</a></h1>
    <div class="bg-success py-5">
        <h1 class="text-center text-white">Editer un Article</h1>

        <form class="w-75 mx-auto text-white" action="/article/{{$article->id}} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">content1</label>
                <textarea class="custom-textarea" name="content1" placeholder="Your content1 here...">{{$article->content1}} </textarea>
            </div>

            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">content2</label>
                <textarea class="custom-textarea" name="content2" placeholder="Your content2 here...">{{$article->content2}}</textarea>
            </div>

            <label for="addTreeInputUrl" class="form-label">Catégorie</label>
            <select name="categorie_id" class="custom-select mb-15">
                @foreach ($categories as $categorie)
                <option
                {{ $article->categorie_id == $categorie->id ? 'selected' : '' }}
                value="{{ $categorie->id }} "> {{ $categorie->name }} </option>
                @endforeach
            </select>

            <div>
                <input class="mb-3" type="file" name="file"  ">
            </div>

            <button type="submit" class="btn btn-primary">Editer</button>
        </form>

    </div>
</section>
