<!-- resources/views/chat.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row" id="app">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chats</div>

                    <input type="text" class="form-control" placeholder="Type your message here..." v-model='message' @keyup.enter='send'>

                    <div class="panel-body">
                        <chat-messages :messages="messages"></chat-messages>
                    </div>
                    <div class="panel-footer">
                        <chat-form
                                v-on:messagesent="addMessage"
                                :user="{{ Auth::user() }}"
                        ></chat-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection