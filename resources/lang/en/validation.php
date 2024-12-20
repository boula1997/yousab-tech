<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'numeric' => 'The :attribute must not be greater than :max.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'string' => 'The :attribute must not be greater than :max characters.',
        'array' => 'The :attribute must not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [

        "permission_id" => "Permission",
        "setting_id" => "Setting",
        "id" => "Id",
        "model_id" => "Model",
        "team_id" => "Team",
        "video_id" => "Video",
        "partner_id" => "Partner",
        "service_id" => "Service",
        "process_id" => "Process",
        "partner_id" => "Partner",

        "team_id" => "Team",
        "contact_id" => "Contact",
        "partner_id" => "Partner",
        "role_id" => "Role",
        "page_id" => "Page",
        "tokenable_id" => "Tokenable",
        "gallery_id" => "Gallery",
        "faq_id" => "Faq",
        "product_id" => "Product",
        "batch" => "Batch",
        "fileable_id" => "Fileable",
        "exception" => "Exception",
        "payload" => "Payload",
        "count" => "Count",
        "map" => "Map",
        "twitter" => "Twitter",
        "queue" => "Queue",
        "tiktok" => "Tiktok",
        "phone1" => "Phone1",
        "email1" => "Email1",
        "abilities" => "Abilities",
        "phone3" => "Phone3",
        "description" => "Description",
        "detail" => "Detail",
        "appointment1" => "Appointment1",
        "meta_data" => "Meta Data",
        "facebook" => "Facebook",
        "youtube_link" => "Youtube_link",
        "connection" => "Connection",
        "youtube" => "Youtube",
        "instgram" => "Instgram",
        "phone2" => "Phone2",
        "email2" => "Email2",
        "address" => "Address",
        "copyright" => "copyright",
        "created_at" => "Created_at",
        "email_verified_at" => "Email_verified_at",
        "failed_at" => "Failed_at",
        "updated_at" => "Updated_at",
        "last_used_at" => "Last_used_at",
        "phone" => "Phone",
        "logo" => "Logo",
    "white_logo" => "White Logo",

        "uuid" => "Uuid",
        "email" => "Email",
        "identifier" => "Identifier",
        "password" => "Password",
        "token" => "Token",
        "tokenable_type" => "Tokenable_type",
        "url" => "Url",
        "title" => "Title",
        "fileable_type" => "Fileable_type",
        "image" => "Image",
        "locale" => "Locale",
        "message" => "Message",
        "tab" => "Tab",
        "newsletter" => "Newsletter",
        "model_type" => "Model_type",
        "name" => "Name",
        "remember_token" => "Remember_token",
        "guard_name" => "Guard_name",
        "subtitle" => "Subtitle",
        "migration" => "Migration",

        "ar"=>[
            "permission_id" => "Permission in Arabic",
            "setting_id" => "Setting in Arabic",
            "id" => "Id in Arabic",
            "model_id" => "Model in Arabic",
            "team_id" => "Team in Arabic",
            "video_id" => "Video in Arabic",
            "partner_id" => "Partner in Arabic",
            "process_id" => "Process in Arabic",
            "partner_id" => "Partner in Arabic",

            "team_id" => "Team in Arabic",
            "contact_id" => "Contact in Arabic",
            "partner_id" => "Partner in Arabic",
            "role_id" => "Role in Arabic",
            "page_id" => "Page in Arabic",
            "tokenable_id" => "Tokenable in Arabic",
            "gallery_id" => "Gallery in Arabic",
            "faq_id" => "Faq in Arabic",
            "product_id" => "Product in Arabic",
            "batch" => "Batch in Arabic",
            "fileable_id" => "Fileable in Arabic",
            "exception" => "Exception in Arabic",
            "payload" => "Payload in Arabic",
            "count" => "Count in Arabic",
            "map" => "Map in Arabic",
            "twitter" => "Twitter in Arabic",
            "queue" => "Queue in Arabic",
            "tiktok" => "Tiktok in Arabic",
            "phone1" => "Phone1 in Arabic",
            "email1" => "Email1 in Arabic",
            "abilities" => "Abilities in Arabic",
            "phone3" => "Phone3 in Arabic",
            "description" => "Description in Arabic",
            "detail" => "Detail in Arabic",
            "appointment1" => "Appointment1 in Arabic",
            "meta_data" => "Meta Data in Arabic",
            "facebook" => "Facebook in Arabic",
            "youtube_link" => "Youtube_link in Arabic",
            "connection" => "Connection in Arabic",
            "youtube" => "Youtube in Arabic",
            "instgram" => "Instgram in Arabic",
            "phone2" => "Phone2 in Arabic",
            "email2" => "Email2 in Arabic",
            "address" => "Address in Arabic",
            "copyright" => "copyright in Arabic",
            "created_at" => "Created_at in Arabic",
            "email_verified_at" => "Email_verified_at in Arabic",
            "failed_at" => "Failed_at in Arabic",
            "updated_at" => "Updated_at in Arabic",
            "last_used_at" => "Last_used_at in Arabic",
            "phone" => "Phone in Arabic",
            "logo" => "Logo in Arabic",
            "uuid" => "Uuid in Arabic",
            "email" => "Email in Arabic",
            "identifier" => "Identifier in Arabic",
            "password" => "Password in Arabic",
            "token" => "Token in Arabic",
            "tokenable_type" => "Tokenable_type in Arabic",
            "url" => "Url in Arabic",
            "title" => "Title in Arabic",
            "fileable_type" => "Fileable_type in Arabic",
            "image" => "Image in Arabic",
            "locale" => "Locale in Arabic",
            "message" => "Message in Arabic",
            "tab" => "Tab in Arabic",
            "newsletter" => "Newsletter in Arabic",
            "model_type" => "Model_type in Arabic",
            "name" => "Name in Arabic",
            "remember_token" => "Remember_token in Arabic",
            "guard_name" => "Guard_name in Arabic",
            "subtitle" => "Subtitle in Arabic",
            "migration" => "Migration in Arabic",
        
        ],

        "en"=>[
            "permission_id" => "Permission in English",
            "setting_id" => "Setting in English",
            "id" => "Id in English",
            "model_id" => "Model in English",
            "team_id" => "Team in English",
            "video_id" => "Video in English",
            "partner_id" => "Partner in English",
            "process_id" => "Process in English",
            "partner_id" => "Partner in English",

            "team_id" => "Team in English",
            "contact_id" => "Contact in English",
            "partner_id" => "Partner in English",
            "role_id" => "Role in English",
            "page_id" => "Page in English",
            "tokenable_id" => "Tokenable in English",
            "gallery_id" => "Gallery in English",
            "faq_id" => "Faq in English",
            "product_id" => "Product in English",
            "batch" => "Batch in English",
            "fileable_id" => "Fileable in English",
            "exception" => "Exception in English",
            "payload" => "Payload in English",
            "count" => "Count in English",
            "map" => "Map in English",
            "twitter" => "Twitter in English",
            "queue" => "Queue in English",
            "tiktok" => "Tiktok in English",
            "phone1" => "Phone1 in English",
            "email1" => "Email1 in English",
            "abilities" => "Abilities in English",
            "phone3" => "Phone3 in English",
            "description" => "Description in English",
            "detail" => "Detail in English",
            "appointment1" => "Appointment1 in English",
            "meta_data" => "Meta Data in English",
            "facebook" => "Facebook in English",
            "youtube_link" => "Youtube_link in English",
            "connection" => "Connection in English",
            "youtube" => "Youtube in English",
            "instgram" => "Instgram in English",
            "phone2" => "Phone2 in English",
            "email2" => "Email2 in English",
            "address" => "Address in English",
            "copyright" => "copyright in English",
            "created_at" => "Created_at in English",
            "email_verified_at" => "Email_verified_at in English",
            "failed_at" => "Failed_at in English",
            "updated_at" => "Updated_at in English",
            "last_used_at" => "Last_used_at in English",
            "phone" => "Phone in English",
            "logo" => "Logo in English",
            "uuid" => "Uuid in English",
            "email" => "Email in English",
            "identifier" => "Identifier in English",
            "password" => "Password in English",
            "token" => "Token in English",
            "tokenable_type" => "Tokenable_type in English",
            "url" => "Url in English",
            "title" => "Title in English",
            "fileable_type" => "Fileable_type in English",
            "image" => "Image in English",
            "locale" => "Locale in English",
            "message" => "Message in English",
            "tab" => "Tab in English",
            "newsletter" => "Newsletter in English",
            "model_type" => "Model_type in English",
            "name" => "Name in English",
            "remember_token" => "Remember_token in English",
            "guard_name" => "Guard_name in English",
            "subtitle" => "Subtitle in English",
            "migration" => "Migration in English",
        
        ]
    
    ],

];
