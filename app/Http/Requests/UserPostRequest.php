<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|alpha|min:3|max:20',
            'email' => 'required|email|unique:user_posts,user_email',
            'subject' => 'required|min:3|max:100',
            'message' => 'required|min:3|max:500',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Please enter your name?',
            'name.alpha' => 'Letter & Space not Allow!',
            'name.min' => 'Your Name should be 3 char long!',
            'name.max' => 'Your Name should be 20 char long!',
            'email.required' => 'Please enter your email?',
            'email.email' => 'Please Enter Proper Email Address!',
            'email.unique' => 'This Email is Already Taken by Another!',
            'subject.required' => 'Please enter Subject?',
            'subject.min' => 'Your Subject require minimum 3 char long!',
            'subject.min' => 'Your Subject require should be under 500 char long!',
            'message.required' => 'Please Ener Your Message?',
            'message.min' => 'Your Message require minimum 3 char long!',
            'message.max' => 'Your Message require should be under 1000 char long!',
        ];
    }
}
