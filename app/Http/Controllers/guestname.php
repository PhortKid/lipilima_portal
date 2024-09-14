// Retrieve the array of guest IDs from the request
            $guest_ids = $request->input('guest', []);
            // Fetch guests from the database
            $guests = Guest::whereIn('id', $guest_ids)->get();
            // Map each guest to their full name
            $guest_names = $guests->map(function ($guest) {
                return $guest->firstname . ' ' . $guest->lastname;
            });
            // Join the names with a comma
            $guest_name = $guest_names->implode(', ');