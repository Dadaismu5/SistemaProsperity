<?php
  class UserTableSeeder extends Seeder {
    public function run()
    {
      DB::table("users")->delete();

      User::create(array(
        "name"              => "Alejandro",
        "last_name"         => "García Santacruz",
        "status"            => "active",
        "user"              => "alejandro",
        "password"          => Hash::make("Al3jandr01")
      ));
    }
  }
?>
