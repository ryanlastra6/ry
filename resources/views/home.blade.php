@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table>
                        <tr>
                            <?php
                                $user = Auth::user();
                                $user_id = $user->id;
                                $user_name = $user->name;
                                $user_email = $user->email;
                                $user_created_at = $user->created_at;
                                $user_updated_at = $user->updated_at;
                                echo '<p>Hey man</p>';
                            ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
