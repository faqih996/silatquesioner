<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionerStoreRequest extends FormRequest
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
            'howLong' => 'required|max:255|string',
            'reasonJoin' => 'required|string',
            'objective' => 'nullable|string', // Validasi untuk objective
            'tujuan_lainnya' => 'nullable|string|max:255',
            'goal' => 'required|max:255|string',
            'confident' => 'required|max:255|string',
            'material' => 'required|max:255|string',
            'activity' => 'required|max:255|string',
            'change' => 'required|string',
            'benefit' => 'required|string',
            'spirit' => 'required|max:255|string',
            'notSpirit' => 'required|max:255|string',
            'impressive' => 'required|string',
            'proud' => 'required|string',
            'touchingWords' => 'required|string',
            'harmingWords' => 'required|string',
            'notHappenAgain' => 'required|string',
            'obstacle' => 'required|string',
            'why' => 'required|string',
            'criticism' => 'required|string',
            'suggestion' => 'required|string',
            'recommendation' => 'required|string',
            'messageToPerson1' => 'required|string',
            'messageToPerson2' => 'required|string',
            'messageToPerson3' => 'required|string',
            'messageToPerson4' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'objective.required' => 'Tujuan harus diisi.',
            'tujuan_lainnya.required' => 'Tujuan lainnya harus diisi jika memilih "Lainnya".',
        ];
    }
}
