<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Post extends Model
{
    use HasFactory;
    public function up()
    {
        Schema::create("posts", function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    public function user()
    {
        return $this->belongsTo("App\Models\User");
    }
}
