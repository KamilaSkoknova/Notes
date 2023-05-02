<x-app-layout>
    <div class="container">
        <div class="notes-where">
            <div class="row">

                <div class="col-12 d-flex justify-content-between">
                    <div class="d-flex">
                        <a href="{{ route('notes.edit', $note) }}" class="btn btn-dark px-3 me-2">Edit</a>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger px-3" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                    <a href="{{ route('notes.index') }}" class="btn btn-dark">Back to list</a>
                </div>

                <div class="col-12 mt-5">
                    @if(session('success'))
                    <div class="bg-white mb-3">
                        <i class="bi bi-check2-square ms-3 me-1 py-5" style="color: red; font-size: 20px"></i>{{ session('success') }}
                    </div>
                    @endif

                    <div class="note-item-whole">

                        <div class="note-item-whole__info d-lg-flex justify-content-between">
                            <p> Updated: {{ $note->updated_at->diffForHumans() }}</p>
                            <p> Created: {{ $note->created_at->diffForHumans() }}</p>
                        </div>

                        <div class="note-item-whole__main">
                            <div class="note-item-whole__main-header">
                                <h1>{{ $note->title }}</h1>
                            </div>
                            <div class="note-item-whole__main-perex">
                                <h6> {{ $note->perex }}</h6>
                            </div>
                            <div class="note-item-whole__main-text">
                                <p> {{ $note->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</x-app-layout>