<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nations', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nations');
    }
};

/*
 INSERT INTO `nations` (`id`, `country`) VALUES (NULL, 'Afghanistan'), (NULL, 'Albania'), (NULL, 'Algeria'), (NULL, 'Andorra'), (NULL, 'Angola'), (NULL, 'Antigua and Barbuda'), (NULL, 'Argentina'), (NULL, 'Armenia'), (NULL, 'Australia'), (NULL, 'Austria'), (NULL, 'Azerbaijan'), (NULL, 'The Bahamas'), (NULL, 'Bahrain'), (NULL, 'Bangladesh'), (NULL, 'Barbados'), (NULL, 'Belarus'), (NULL, 'Belgium'), (NULL, 'Belize'), (NULL, 'Benin'), (NULL, 'Bhutan'), (NULL, 'Bolivia'), (NULL, 'Bosnia and Herzegovina'), (NULL, 'Botswana'), (NULL, 'Brazil'), (NULL, 'Brunei'), (NULL, 'Bulgaria'), (NULL, 'Burkina Faso'), (NULL, 'Burundi'), (NULL, 'Cabo Verde'), (NULL, 'Cambodia'), (NULL, 'Cameroon'), (NULL, 'Canada'), (NULL, 'Central African Republic'), (NULL, 'Chad'), (NULL, 'Chile'), (NULL, 'China'), (NULL, 'Colombia'), (NULL, 'Comoros'), (NULL, 'Congo, Democratic Republic of the'), (NULL, 'Congo, Republic of the'), (NULL, 'Costa Rica'), (NULL, 'Côte d’Ivoire'), (NULL, 'Croatia'), (NULL, 'Cuba'), (NULL, 'Cyprus'), (NULL, 'Czech Republic'), (NULL, 'Denmark'), (NULL, 'Djibouti'), (NULL, 'Dominica'), (NULL, 'Dominican Republic'), (NULL, 'East Timor (Timor-Leste)'), (NULL, 'Ecuador'), (NULL, 'Egypt'), (NULL, 'El Salvador'), (NULL, 'Equatorial Guinea'), (NULL, 'Eritrea'), (NULL, 'Estonia'), (NULL, 'Eswatini'), (NULL, 'Ethiopia'), (NULL, 'Fiji'), (NULL, 'Finland'), (NULL, 'France'), (NULL, 'Gabon'), (NULL, 'The Gambia'), (NULL, 'Georgia'), (NULL, 'Germany'), (NULL, 'Ghana'), (NULL, 'Greece'), (NULL, 'Grenada'), (NULL, 'Guatemala'), (NULL, 'Guinea'), (NULL, 'Guinea-Bissau'), (NULL, 'Guyana'), (NULL, 'Haiti'), (NULL, 'Honduras'), (NULL, 'Hungary'), (NULL, 'Iceland'), (NULL, 'India'), (NULL, 'Indonesia'), (NULL, 'Iran'), (NULL, 'Iraq'), (NULL, 'Ireland'), (NULL, 'Israel'), (NULL, 'Italy'), (NULL, 'Jamaica'), (NULL, 'Japan'), (NULL, 'Jordan'), (NULL, 'Kazakhstan'), (NULL, 'Kenya'), (NULL, 'Kiribati'), (NULL, 'Korea, North'), (NULL, 'Korea, South'), (NULL, 'Kosovo'), (NULL, 'Kuwait'), (NULL, 'Kyrgyzstan'), (NULL, 'Laos'), (NULL, 'Latvia'), (NULL, 'Lebanon'), (NULL, 'Lesotho'), (NULL, 'Liberia'), (NULL, 'Libya'), (NULL, 'Liechtenstein'), (NULL, 'Lithuania'), (NULL, 'Luxembourg'), (NULL, 'Madagascar'), (NULL, 'Malawi'), (NULL, 'Malaysia'), (NULL, 'Maldives'), (NULL, 'Mali'), (NULL, 'Malta'), (NULL, 'Marshall Islands'), (NULL, 'Mauritania'), (NULL, 'Mauritius'), (NULL, 'Mexico'), (NULL, 'Micronesia, Federated States of'), (NULL, 'Moldova'), (NULL, 'Monaco'), (NULL, 'Mongolia'), (NULL, 'Montenegro'), (NULL, 'Morocco'), (NULL, 'Mozambique'), (NULL, 'Myanmar (Burma)'), (NULL, 'Namibia'), (NULL, 'Nauru'), (NULL, 'Nepal'), (NULL, 'Netherlands'), (NULL, 'New Zealand'), (NULL, 'Nicaragua'), (NULL, 'Niger'), (NULL, 'Nigeria'), (NULL, 'North Macedonia'), (NULL, 'Norway'), (NULL, 'Oman'), (NULL, 'Pakistan'), (NULL, 'Palau'), (NULL, 'Panama'), (NULL, 'Papua New Guinea'), (NULL, 'Paraguay'), (NULL, 'Peru'), (NULL, 'Philippines'), (NULL, 'Poland'), (NULL, 'Portugal'), (NULL, 'Qatar'), (NULL, 'Romania'), (NULL, 'Russia'), (NULL, 'Rwanda'), (NULL, 'Saint Kitts and Nevis'), (NULL, 'Saint Lucia'), (NULL, 'Saint Vincent and the Grenadines'), (NULL, 'Samoa'), (NULL, 'San Marino'), (NULL, 'Sao Tome and Principe'), (NULL, 'Saudi Arabia'), (NULL, 'Senegal'), (NULL, 'Serbia'), (NULL, 'Seychelles'), (NULL, 'Sierra Leone'), (NULL, 'Singapore'), (NULL, 'Slovakia'), (NULL, 'Slovenia'), (NULL, 'Solomon Islands'), (NULL, 'Somalia'), (NULL, 'South Africa'), (NULL, 'Spain'), (NULL, 'Sri Lanka'), (NULL, 'Sudan'), (NULL, 'Sudan, South'), (NULL, 'Suriname'), (NULL, 'Sweden'), (NULL, 'Switzerland'), (NULL, 'Syria'), (NULL, 'Taiwan'), (NULL, 'Tajikistan'), (NULL, 'Tanzania'), (NULL, 'Thailand'), (NULL, 'Togo'), (NULL, 'Tonga'), (NULL, 'Trinidad and Tobago'), (NULL, 'Tunisia'), (NULL, 'Turkey'), (NULL, 'Turkmenistan'), (NULL, 'Tuvalu'), (NULL, 'Uganda'), (NULL, 'Ukraine'), (NULL, 'United Arab Emirates'), (NULL, 'United Kingdom'), (NULL, 'United States'), (NULL, 'Uruguay'), (NULL, 'Uzbekistan'), (NULL, 'Vanuatu'), (NULL, 'Vatican City'), (NULL, 'Venezuela'), (NULL, 'Vietnam'), (NULL, 'Yemen'), (NULL, 'Zambia'), (NULL, 'Zimbabwe')
 */

 