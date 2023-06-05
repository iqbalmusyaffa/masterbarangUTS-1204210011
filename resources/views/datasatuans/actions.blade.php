<div class="d-flex">
    <a href="{{ route('datasatuans.show', ['datasatuan'=>$datasatuan->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
    <a href="{{ route('datasatuans.edit', ['datasatuan'=>$datasatuan->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

    <div>
        <form action="{{ route('datasatuans.destroy',['datasatuan' =>$datasatuan->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
