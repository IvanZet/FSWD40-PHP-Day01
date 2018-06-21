INSERT INTO vehicles (brand, model, color, airCon, transmittion, seats, bags, img, price, registrationDate) VALUES
('Audi', 'A6', 'black', 1, 1, 3, 5, 'https://images.unsplash.com/photo-1525607176332-28956a2aa98a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7798fdc33bdf659daada16a92d2d37b8&auto=format&fit=crop&w=400&q=60','150', STR_TO_DATE('01-01-2018', '%d-%m-%y'));

INSERT INTO vehicles(
    brand,
    model,
    color,
    airCon,
    transmittion,
    seats,
    bags,
    img,
    price,
    registrationDate
)
VALUES
(   'Audi', 
    'A6', 
    'black', 
    1, 
    1, 
    3, 
    5, 
    'https://images.unsplash.com/photo-1525607176332-28956a2aa98a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7798fdc33bdf659daada16a92d2d37b8&auto=format&fit=crop&w=400&q=60',
    '150', 
    STR_TO_DATE('01-01-2018', '%d-%m-%y')),
(
    'Mitsubishi',
    'Lancer',
    'yellow',
    1,
    1,
    3,
    5,
    'https://images.unsplash.com/photo-1518265612847-134e6599e7e4?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fd6889ddb9d9c79ee626d42a9dd2845d&auto=format&fit=crop&w=400&q=60',
    '75',
    STR_TO_DATE('01-11-2017', '%d-%m-%y')
),
(
    'Fiat',
    '500',
    'red',
    2,
    2,
    3,
    2,
    'https://images.unsplash.com/photo-1481628006330-476f1e161a05?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ba99b40efaf67329a24237e8fb635c7c&auto=format&fit=crop&w=400&q=60',
    '50',
    STR_TO_DATE('01-06-2017', '%d-%m-%y')
),
(
    'Seat',
    'Leon',
    'white',
    2,
    2,
    3,
    3,
    'https://images.unsplash.com/photo-1525607176332-28956a2aa98a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7798fdc33bdf659daada16a92d2d37b8&auto=format&fit=crop&w=400&q=60',
    '150',
    STR_TO_DATE('01-08-2016', '%d-%m-%y')
)
;