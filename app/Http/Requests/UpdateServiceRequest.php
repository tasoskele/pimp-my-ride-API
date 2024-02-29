<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;

class UpdateServiceRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'details' => 'required|string|max:255',
			'type' => 'required|in:minor,major,emergency',
			'kilometers' => 'required|integer',
			'cost' => 'required|numeric',
			'shop' => 'required|string|max:255'
		];
	}

	public function failedValidation(Validator $validator)
	{
		$response = response()->json([
			'errors' => $validator->errors()
		], 400);

		throw new HttpResponseException($response);
	}
}
