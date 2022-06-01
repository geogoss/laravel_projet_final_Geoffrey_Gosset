<section class="mb-5">
    <h2 class=" text-center m-5">Partie About Us et Contact </h2>
    <div class="w-75 mx-auto mt-5">
        <table class="table  table-danger">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">1ere Partie -> About</th>
                    <th scope="col">Title About</th>
                    <th scope="col">content1 About</th>
                    <th scope="col">content2 About</th>
                    <th scope="col">content3 About</th>
                    <th scope="col">Image About</th>
                    <th scope="col">2eme Partie -> Contact</th>
                    <th scope="col">address1 Contact</th>
                    <th scope="col">address2 Contact</th>
                    <th scope="col">phone Contact</th>
                    <th scope="col">email Contact</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($infos as $item)
                    <tr>
                        <th scope="row">{{ $item->id }} </th>
                        <td></td>
                        <td>{{ $item->title }}</td>
                        <td>{{ substr($item->content1, 0, 25) }} </td>
                        <td>{{ substr($item->content2, 0, 25) }} </td>
                        <td>{{ substr($item->content3, 0, 25) }} </td>
                        <td>
                            {{-- {{dd($item->blog->src)}} --}}
                            <img style="width: 50px; height: 50px;"
                                {{-- src="{{'/thumbnail/images/aboutUs/'.$infos[0]->src}}" alt=""> --}}
                                {{-- {{dd($item->src)}} --}}
                                src="{{'/thumbnail/images/aboutUs/'.$item->src}}" alt="">
                        </td>
                        <td></td>
                        <td>{{ $item->address1 }} </td>
                        <td>{{ $item->address2 }} </td>
                        <td>{{ $item->phone }} </td>
                        <td>{{ $item->email }} </td>
                        <td>
                            <div class="d-flex justify-content-center text-center mx-3 mb-5">
                                {{-- <form action="/info/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                                </form> --}}
                                <button class="btn btn-primary">
                                    @csrf
                                    <a class="text-decoration-none text-white"
                                        href="/info/{{ $item->id }}/edit ">Modifier</a>
                                </button>

                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>
