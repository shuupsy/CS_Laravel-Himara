@foreach ($notifications as $notif)
    <div class="modalWindow hidden p-6 my-6 border-b bg-white border-gray-200">
        <h1 class='text-lg text-slate-600 my-1 font-semibold'>
            @if ($notif->contact_message_id != null)
                CONTACT
            @elseif ($notif->room_review_id != null)
                NEW REVIEW
            @else
                New Room Release
            @endif
        </h1>

        {{-- Contact --}}
        @if ($notif->contact_message_id != null)
            <div>
                <p>From : <span class='text-slate-500'>{{ $notif->contact_message->name }}
                        ({{ $notif->contact_message->email }})
                    </span></p>

                <p>Date :
                    <span class='text-slate-500'>{{ $notif->contact_message->created_at->format('d/m/Y') }}
                    </span>
                </p>

                <p>Subject :
                    <span class='text-slate-500'>
                        {{ $notif->contact_message->subject == null ? 'Null' : $notif->contact_message->subject }}</span>
                </p>

                <br/>
                <p>Message:</p>
                <p class='text-slate-500'>{{ $notif->contact_message->message }}</p>
            </div>


            {{-- Room review --}}
        @elseif ($notif->room_review_id != null)
            <div>
                <p>From :
                    <span class='text-slate-500'>
                        {{ $notif->room_review->booking->user->first_name }}
                        {{ $notif->room_review->booking->user->last_name }}
                        ({{ $notif->room_review->booking->user->email }})
                    </span>
                </p>

                <p>Date :
                    <span class='text-slate-500'>{{ $notif->room_review->created_at->format('d/m/Y') }}
                    </span>
                </p>

                <br />
                <p>Room :
                    <span class='text-slate-500'>
                        {{ $notif->room_review->booking->room->name }}
                    </span>
                </p>

                <p>Rating :
                    <span class='text-slate-500'>
                        {{ $notif->room_review->rating }}/5
                    </span>
                </p>

                <p>Review :
                    <span class='text-slate-500'>
                        {{ $notif->room_review->review }}
                    </span>
                </p>

                {{-- Publish --}}
                <form action="/review/{{$notif->room_review->id}}" method="post" class='my-3'>
                    @csrf
                    @method('patch')
                    <button class='bg-[#444444] p-2 text-white rounded-md hover:bg-[#222222] uppercase'>Publish</button>
                </form>
            </div>


            {{-- Room  --}}
        @else
            <div>
                {{-- Publish --}}
                <form action="/review/{{$notif->room_review->id}}" method="post" class='my-3'>
                    @csrf
                    @method('patch')
                    <button class='bg-[#444444] p-2 text-white rounded-md hover:bg-[#222222] uppercase'>Publish</button>
                </form>
            </div>
        @endif

    </div>
@endforeach
