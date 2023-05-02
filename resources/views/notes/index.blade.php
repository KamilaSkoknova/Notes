<x-app-layout>
    <div class="container">
        <div class="notes-where">
            <div class="row">

                <div class="col-12 d-flex justify-content-between">
                    <h4>All Notes</h4>
                    <a href="{{ route('notes.create') }}" class="btn btn-dark text-right">New Note</a>
                </div>
                @if(session('success'))
                <div class="bg-white my-3">
                    <i class="bi bi-check2-square ms-3 me-1 py-5" style="color: red; font-size: 20px"></i>{{ session('success') }}
                </div>
                @endif
                @forelse ($notes as $note ) 
                <div class="col-12 col-md-6 col-lg-4 mt-5">
                    <div class="note-item">
                        <div class="note-item__header">
                            <h2 class="text-center">{{ Str::limit($note->title, 100) }}</h2>
                        </div>
                        <div class="note-item__btn pt-1">
                            <a href=" {{ route('notes.show', $note->id ) }}"> More </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="notes-where__none">
                        <p>You have no notes yet.</p>
                    </div>
                </div>
                @endforelse

                <div class="col-12 mt-3">
                    {{ $notes->links('pagination::bootstrap-5') }}
                </div>

            </div>
        </div>
    </div> 
</x-app-layout>
    