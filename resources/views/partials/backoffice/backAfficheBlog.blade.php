<section class="mb-5">
    <h2 class=" text-center m-5">Créer un nouveau Blog <a class="text-success" href="/article/create"> CLICK HERE</a>
    </h2>
    <div class="w-75 mx-auto">
        <table class="table  table-danger">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Photo/blog</th>
                    <th scope="col">content1</th>
                    <th scope="col">content2</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">User</th>
                    {{-- <th scope="col">bool</th> --}}
                    <th scope="col">comments</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $item)
                    <tr>
                        <th scope="row">{{ $item->id }} </th>
                        <td>
                            {{-- {{dd($item->blog->src)}} --}}
                            <img style="width: 50px; height: 50px;"
                                src="{{ asset('/thumbnail/images/270x230/' . $item->blog->src) }}" alt="">
                        </td>

                        {{-- <img src="{{asset('/thumbnail/images/70x83/details1.jpg')}}" alt=""> </td> --}}
                        <td>{{ substr($item->content1, 0, 25) }} </td>
                        <td>{{ substr($item->content2, 0, 25) }} </td>
                        <td>{{ $item->categorie->name }} </td>
                        <td>{{ $item->user->name }} <br> {{ $item->user->role->name }} </td>
                        {{-- {{dd($item->bool)}} --}}
                        {{-- <td class="{{$item->bool == 1 ? 'table-dark ' : 'table-warning '}} ">{{$item->bool == 1 ? 'Star Product' : 'Classic Product'}} </td> --}}
                        <td> {{ $item->comment->count() }}</td>
                        <td>
                            <div class="d-flex justify-content-center text-center mx-3 mb-5">

                                <form action="/article/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                                </form>
                                <button class="btn btn-primary">
                                    @csrf
                                    <a class="text-decoration-none text-white"
                                        href="/article/{{ $item->id }}/edit ">Modifier</a>
                                </button>

                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>
