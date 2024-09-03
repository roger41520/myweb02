<?php
namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('contacts.index', [
            'contacts' => Contact::latest()->paginate(3)   
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request) : RedirectResponse
    {
        Contact::create($request->all());
        return redirect()->route('contacts.index')
                ->withSuccess('New contact is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact) : View
    {
        return view('contacts.show', [
            'contact' => $contact
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact) : View
    {
        return view('contacts.edit', [
            'contact' => $contact
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact) : RedirectResponse
    {
        $Contact->update($request->all());
        return redirect()->back()
                ->withSuccess('Contact is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact) : RedirectResponse
    {
        $contact->delete();
        return redirect()->route('contacts.index')
                ->withSuccess('Contact is deleted successfully.');
    }
}
