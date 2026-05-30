<?php

use App\Models\User;

it('insert the users to the db', function () {
    $users = User::factory(10)->create();

    expect($users->count())->toBe(10);
});
