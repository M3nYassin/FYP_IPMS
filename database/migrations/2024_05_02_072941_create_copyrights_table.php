<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('geoinfos', function (Blueprint $table) {
            $table->integer('formType');
            $table->id();
            $table->string('inventiontitle');
            $table->string('name');
            $table->string('applicanttype');
            $table->string('nationality');
            $table->string('postcode');
            $table->string('town');
            $table->string('state');
            $table->string('telephone');
            $table->string('email');
            $table->string('website');
            $table->string('postcodeservice');
            $table->string('townservice');
            $table->string('stateservice');
            $table->string('representation');
            $table->string('earlygi');
            $table->string('emailgi');
            $table->string('non_roman')->nullable();
            $table->string('character')->nullable();
            $table->string('transliteration')->nullable();
            $table->string('translation')->nullable();
            $table->string('non_national')->nullable();
            $table->string('language')->nullable();
            $table->string('translation_national')->nullable();
            $table->string('class')->nullable();
            $table->string('listofgoods')->nullable();
            $table->date('date_of_protection')->nullable();
            $table->string('goods_description')->nullable();
            $table->binary('supporting_documents1')->nullable();
            $table->binary('area_picture')->nullable();
            $table->string('colour')->nullable();
            $table->string('shape')->nullable();
            $table->string('texture')->nullable();
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
            $table->string('taste')->nullable();
            $table->string('proof_of_origin')->nullable();
            $table->string('causal_link')->nullable();
            $table->string('processing_techniques')->nullable();
            $table->string('labelling_description')->nullable();
            $table->string('award_recognition')->nullable();
            $table->string('inspection_body')->nullable();
            $table->string('association')->nullable();
            $table->binary('supporting_documents')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('comment')->nullable();
            $table->string('is_complete');
            $table->timestamps();
        });

        Schema::create('infos', function (Blueprint $table) {
            $table->integer('formType');
            $table->id();

            $table->string('inventiontitle');
            $table->string('name');
            $table->string('applicant_type');
            $table->string('business_registration');
            $table->string('business_address');
            $table->string('phone_num');
            $table->string('reference')->nullable();
            $table->string('trade_type')->nullable();
            $table->string('word')->nullable();
            $table->string('device')->nullable();
            $table->string('word_device')->nullable();
            $table->string('shape')->nullable();
            $table->string('styleword')->nullable();
            $table->string('color')->nullable();
            $table->string('sound')->nullable();
            $table->string('scent')->nullable();
            $table->string('hologram')->nullable();
            $table->string('positioning')->nullable();
            $table->string('motion')->nullable();
            $table->string('combination')->nullable();
            $table->string('description')->nullable();
            $table->string('trademark_color')->nullable();
            $table->text('color_description')->nullable();
            $table->binary('graphic')->nullable();
            $table->text('disclaimer')->nullable();
            $table->date('firstuse')->nullable();
            $table->binary('additionalDocs')->nullable();
            $table->text('comment')->nullable();
            $table->string('is_complete');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('util_infos', function (Blueprint $table) {
            $table->integer('formType');
            $table->id();
            $table->string('inventiontitle');
            $table->string('name');
            $table->string('applicantid');
            $table->string('applicantaddress');
            $table->string('applicantnationality');
            $table->string('telno');
            $table->string('faxno');
            $table->string('innovator_status')->nullable();
            $table->string('innovator_name')->nullable();
            $table->string('innovator_address')->nullable();
            $table->string('divisional')->nullable();
            $table->date('filingdate')->nullable();
            $table->date('prioritydate')->nullable();
            $table->string('initialapplication')->nullable();
            $table->date('initialfiling')->nullable();
            $table->string('claimcountry')->nullable();
            $table->date('filingclaim')->nullable();
            $table->string('claimapplication')->nullable();
            $table->string('patentsymbol')->nullable();
            $table->string('earlyapplication')->nullable();
            $table->text('comment')->nullable();
            $table->string('is_complete');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('patinfos', function (Blueprint $table) {
            $table->integer('formType');
            $table->id();
            $table->string('inventiontitle');
            $table->string('name');
            $table->string('applicantid');
            $table->string('applicantaddress');
            $table->string('applicantnationality');
            $table->string('telno');
            $table->string('faxno');
            $table->string('innovator_status')->nullable();
            $table->string('innovator_name')->nullable();
            $table->string('innovator_address')->nullable();
            $table->string('divisional')->nullable();
            $table->date('filingdate')->nullable();
            $table->date('prioritydate')->nullable();
            $table->string('initialapplication')->nullable();
            $table->date('initialfiling')->nullable();
            $table->string('claimcountry')->nullable();
            $table->date('filingclaim')->nullable();
            $table->string('claimapplication')->nullable();
            $table->string('patentsymbol')->nullable();
            $table->string('earlyapplication')->nullable();
            $table->text('comment')->nullable();
            $table->string('is_complete');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('industs', function (Blueprint $table) {
            $table->integer('formType');
            $table->id();
            $table->string('inventiontitle');
            $table->string('name');
            $table->string('author');
            $table->string('agent_name');
            $table->string('article');
            $table->string('classification');
            $table->string('view');
            $table->string('multi');
            $table->string('association');
            $table->string('prioCountry');
            $table->string('prioNo');
            $table->date('prioDate');
            $table->string('ten');
            $table->string('divNo');
            $table->date('divDate');
            $table->string('malay');
            $table->text('comment')->nullable();
            $table->string('is_complete');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('copyinfos', function (Blueprint $table) {
            $table->integer('formType');
            $table->id();
            $table->string('inventiontitle');
            $table->string('worktitle');
            $table->string('worktranslation');
            $table->string('worktransliteration');
            $table->string('worklanguage');
            $table->string('copyrightwork')->nullable();
            $table->string('derivativework')->nullable();
            $table->date('datecreate')->nullable();
            $table->string('publication_status')->nullable();
            $table->string('year_compilation')->nullable();
            $table->date('date_first_publication')->nullable();
            $table->string('country_publication')->nullable();
            $table->string('authorname')->nullable();
            $table->string('authorid')->nullable();
            $table->string('authornationality')->nullable();
            $table->string('authoraddress')->nullable();
            $table->string('authorpostcode')->nullable();
            $table->string('authorcity')->nullable();
            $table->string('authorstate')->nullable();
            $table->string('authorcountry')->nullable();
            $table->string('authoremail')->nullable();
            $table->string('telno')->nullable();
            $table->string('faxno')->nullable();
            $table->string('ownername')->nullable();
            $table->string('ownerid')->nullable();
            $table->string('companyname')->nullable();
            $table->string('companyno')->nullable();
            $table->string('owneradd')->nullable();
            $table->string('ownerpostcode')->nullable();
            $table->string('ownercity')->nullable();
            $table->string('ownernationality')->nullable();
            $table->string('ownerstate')->nullable();
            $table->string('ownercountry')->nullable();
            $table->string('ownertelno')->nullable();
            $table->string('owneremail')->nullable();
            $table->string('ownerfaxno')->nullable();
            $table->string('licenseename')->nullable();
            $table->string('licenseeid')->nullable();
            $table->string('licenseecompanyname')->nullable();
            $table->string('licenseecompno')->nullable();
            $table->string('licenseeadd')->nullable();
            $table->string('licenseepostcode')->nullable();
            $table->string('licenseecity')->nullable();
            $table->string('licenseenationality')->nullable();
            $table->string('licenseestate')->nullable();
            $table->string('licenseecountry')->nullable();
            $table->string('licenseetelno')->nullable();
            $table->string('licenseeemail')->nullable();
            $table->string('licenseefaxno')->nullable();
            $table->text('comment')->nullable();
            $table->string('is_complete');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('util_infos');
        Schema::dropIfExists('geoinfos');
        Schema::dropIfExists('infos');
        Schema::dropIfExists('industs');
        Schema::dropIfExists('patinfos');
        Schema::dropIfExists('copyinfos');
    }
};
