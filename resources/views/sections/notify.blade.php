

<div class=" notifications-block" >
    <h2 >Unread notifications</h2>
    <div class=" row mt-4 mb-4 p-4" style=" padding: 16px; background: #ffffff;">
        @forelse(Auth::user()->unreadNotifications as $notification)

            <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 border-dark p-1 " >
                <p class="text-center notification" >{{ \App\Custom\NotificationPrepare::get($notification) }}</p>
            </div>

        @empty

            <p>Not unread notification</p>

        @endforelse
    </div>
    <a href="{{ route('read-notifications') }}" class="btn btn-primary">Прочитать</a>
</div>

