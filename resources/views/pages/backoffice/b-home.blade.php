@extends('layouts.app')

@section('content')
    <div class="my-6 sm:px-6 lg:px-8">
        <h1 class="text-[#D7D8D9] text-6xl font-bold uppercase leading-tight">Welcome to the backoffice.</h1>

        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
            <div class="p-6 border-b bg-white border-gray-200">
                <h1 class='text-2xl text-[#D8BA8D] my-1 font-semibold'>
                    Mailbox
                </h1>
                {{-- Liste de notifs --}}
                <div>
                    <table class="table-auto w-full">
                        <thead class='h-14'>
                            <tr class='text-black'>
                                <th>From</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Mark as Read</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($notifications as $notif)
                                <tr class='h-14'>

                                    {{-- From --}}
                                    <td class='{{ $notif->is_Read ? '' : 'text-slate-600 font-bold' }}'>
                                        @if ($notif->contact_message_id != null)
                                            CONTACT: {{ $notif->contact_message->email }}
                                        @elseif ($notif->room_review_id != null)
                                            NEW REVIEW
                                        @else
                                            New Room Release
                                        @endif
                                    </td>

                                    {{-- Subject --}}
                                    <td class='{{ $notif->is_Read ? '' : 'text-slate-600 font-bold' }}'>
                                        @if ($notif->contact_message_id != null)
                                            {{ $notif->contact_message->subject == null ? 'Subject Null' : $notif->contact_message->subject }}
                                        @elseif ($notif->room_review_id != null)
                                            Room : {{ $notif->room_review->booking->room->name }}
                                        @else
                                            ah
                                        @endif
                                    </td>

                                    {{-- Date --}}
                                    <td class='text-center {{ $notif->is_Read ? '' : 'text-slate-600 font-bold' }}'>
                                        {{ $notif->created_at->format('d/m/Y') }}</td>

                                    {{-- is_Read --}}
                                    <td>
                                        <form action="/notification/{{ $notif->id }}" method="post">
                                            @csrf
                                            @method('patch')

                                            <button
                                                class='bg-slate-50 p-2 text-black rounded-sm hover:bg-slate-200 {{ $notif->is_Read ? 'bg-slate-200' : 'text-slate-600 font-bold' }}'><i
                                                    class='bx bx-check'></i></button>
                                        </form>
                                    </td>

                                    {{-- Bouton VOIR --}}
                                    <td class='text-center'>
                                        <button
                                            class='moreBtn bg-slate-600 p-2.5 text-white rounded-md hover:bg-[#222222] uppercase'>More</button>
                                    </td>

                                    {{-- Bouton DELETE --}}
                                    <td class='text-center px-1.5'>
                                        <form action="/notification/{{ $notif->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button
                                                class='text-red-500 hover:bg-red-500 hover:text-white hover:rounded-lg p-2 transition duration-150 hover:ease-in'>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div>{{ $notifications->links() }}</div>
                </div>
            </div>
        @endif

        {{-- Modal message --}}
        @include('partial.backoffice.b-modal-notif')
    </div>
    <script src="/js/notification.js"></script>
@endsection
