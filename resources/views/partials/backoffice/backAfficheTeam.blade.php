<section class="mb-5">
    <h2 class=" text-center m-5">Partie Team </h2>
    <div class="w-75 mx-auto mt-5">
        <table class="table  table-danger">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Age</th>
                    <th scope="col">content</th>
                    <th scope="col">Image Teamer</th>
                    <th scope="col">Fonction</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $item)
                    <tr>
                        <th scope="row">{{ $item->id }} </th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->firstname }} </td>
                        <td>{{ $item->age }} </td>
                        <td>{{ substr($item->content, 0, 25) }} </td>
                        <td>
                            {{-- {{dd($item->blog->src)}} --}}
                            <img style="width: 50px; height: 50px;"
                                {{-- src="{{'/thumbnail/images/aboutUs/'.$infos[0]->src}}" alt=""> --}}
                                {{-- {{dd($item->src)}} --}}
                                src="{{'/thumbnail/images/120x120/'.$item->src}}" alt="">
                        </td>
                        <td class="{{$item->fonction == "The Big Boss" ? 'table-dark' : 'table-warning'}} " >{{ $item->fonction }} </td>
                        <td>
                            <div class="d-flex justify-content-center text-center mx-3 mb-5">
                                <form action="/team/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                                </form>
                                <button class="btn btn-primary">
                                    @csrf
                                    <a class="text-decoration-none text-white"
                                        href="/team/{{ $item->id }}/edit ">Modifier</a>
                                </button>

                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>
