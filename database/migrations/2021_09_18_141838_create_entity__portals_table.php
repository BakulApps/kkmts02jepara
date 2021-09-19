<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntityPortalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portal_entity__settings', function (Blueprint $table) {
            $table->id('setting_id');
            $table->string('setting_name')->unique();
            $table->string('setting_value');
        });

        Schema::create('portal_entity__menus', function (Blueprint $table){
            $table->id('menu_id');
            $table->string('menu_parent', 3)->default(0)->nullable();
            $table->string('menu_name', 100)->nullable();
            $table->string('menu_link', 200)->nullable();
        });

        Schema::create('portal_entity__posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->string('post_image')->nullable();
            $table->string('post_image_retina')->nullable();
            $table->integer('post_author')->nullable();
            $table->integer('post_editor')->nullable();
            $table->integer('post_category')->nullable();
            $table->string('post_title')->nullable();
            $table->text('post_content')->nullable();
            $table->boolean('post_comment')->default(0)->nullable();
            $table->boolean('post_status')->default(0)->nullable();
            $table->integer('post_read')->nullable();
            $table->integer('post_headlines')->nullable();
            $table->timestamps();
        });

        Schema::create('portal_entity__categories', function (Blueprint $table) {
            $table->id('category_id');
            $table->string('category_name', 100);
            $table->mediumText('category_desc')->nullable();
        });

        Schema::create('portal_entity__tags', function (Blueprint $table) {
            $table->id('tag_id');
            $table->string('tag_name', 20);
            $table->mediumText('tag_desc')->nullable();
        });

        Schema::create('portal_entity__comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->integer('comment_parent')->nullable();
            $table->string('comment_name', 50);
            $table->string('comment_email', 50)->nullable();
            $table->mediumText('comment_content');
            $table->boolean('comment_read');
            $table->timestamps();
        });

        Schema::create('portal_entity__posts_tag', function (Blueprint $table) {
            $table->id('post_tag_id');
            $table->integer('post_id');
            $table->integer('tag_id');
        });

        Schema::create('portal_entity__posts_comment', function (Blueprint $table){
            $table->id('post_comment_id');
            $table->integer('post_id');
            $table->integer('comment_id');
        });

        Schema::create('portal_entity__sections', function (Blueprint $table) {
            $table->id('section_id');
            $table->string('section_name', 100)->nullable();
            $table->mediumText('section_content')->nullable();
        });

        Schema::create('portal_entity__galeries', function (Blueprint $table){
            $table->id('galery_id');
            $table->mediumText('galery_image')->nullable();
            $table->string('galery_name');
            $table->timestamps();
        });

        Schema::create('portal_entity__managements', function (Blueprint $table){
            $table->id('management_id');
            $table->string('management_name');
            $table->string('management_position');
            $table->string('management_desc');
            $table->string('management_facebook');
            $table->string('management_twitter');
            $table->string('management_instagram');
            $table->string('management_image');
            $table->string('management_image_retina');
        });

        Schema::create('portal_entity__testimonials', function (Blueprint $table){
            $table->id('testimonial_id');
            $table->integer('testimonial_star');
            $table->mediumText('testimonial_content');
            $table->string('testimonial_name');
            $table->string('testimonial_position');
            $table->string('testimonial_image');
            $table->timestamps();
        });

        Schema::create('portal_entity__users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_image')->nullable();
            $table->string('user_fullname', 200);
            $table->string('user_name', 50);
            $table->string('user_pass');
            $table->string('user_email', 50);
            $table->string('user_role');
            $table->mediumText('user_desc')->nullable();
            $table->string('user_facebook')->nullable();
            $table->string('user_instagram')->nullable();
            $table->string('user_twitter')->nullable();
            $table->rememberToken();
        });

        Schema::create('portal_entity__roles', function (Blueprint $table) {
            $table->id('role_id');
            $table->string('role_name', 20);
            $table->mediumText('role_desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portal_entity__settings');
        Schema::dropIfExists('portal_entity__menus');
        Schema::dropIfExists('portal_entity__posts');
        Schema::dropIfExists('portal_entity__categories');
        Schema::dropIfExists('portal_entity__tags');
        Schema::dropIfExists('portal_entity__comments');
        Schema::dropIfExists('portal_entity__posts_tag');
        Schema::dropIfExists('portal_entity__posts_comment');
        Schema::dropIfExists('portal_entity__sections');
        Schema::dropIfExists('portal_entity__galeries');
        Schema::dropIfExists('portal_entity__managements');
        Schema::dropIfExists('portal_entity__testimonials');
        Schema::dropIfExists('portal_entity__users');
        Schema::dropIfExists('portal_entity__roles');
    }
}
