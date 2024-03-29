    <?php
    //file: app/database/migrations/2013_12_13_140249_create_users_table.php
     
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
     
    class CreateUsersTable extends Migration {
     
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
    Schema::table('users', function(Blueprint $table)
    {
    $table->create();
    $table->increments('id');
    $table->string('username');
    $table->string('password');
    $table->string('email');
    $table->timestamps();
    });
    }
     
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
    Schema::table('users', function(Blueprint $table)
    {
    //
    });
    }
     
    }