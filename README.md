# Gourmet

A DBMS Project

## INSTRUCTION READ

### Naming Rules

#### Table Naming

- Use lowercase - to improve type speed
- Table name must be singular singular

#### Attributes Naming

- Use underscore to separate two words in attributes name ie `user_id` not like  `userid` , `userId`
- Add prefix to atrribute if attribute is foreign key, see this.

## TODO

- [x] think about what to do
- [x] Create database
- [x] Enter some for dev data
- [x] ~~find~~ create css
- [x] Create Front End (45%)
- [x] Create Back End (45%)
- [x] add login and signup warning CSS
- [x] Enter more data
- [ ] Create Slide of databse layout
- [ ] **GUI** modify time in `rest_list.php`, convert to AM/PM
- [ ] **GUI** modify price in cuisines
- [ ] In add_rest, modify fields
    - [ ] rating is still integer
    - [ ] insert time in proper form
- [ ] In serve_query, redirect to somewhere
    - [ ] also display, if creation of restaurant was a success
    - [ ] ** add constraints**, like limit time between 00:00 to 24:00
- [ ] In booking.php, add restaurant details in frontend
    - [ ] also display, total number of seats available,
    - [ ] create constraint, like user shouldnt enter more number of seats than available
    - [ ] return some number, jo user physically restaurant ko dikhayega.
- [ ] In user.php, add a link to see all of his booking status
- [ ] Link `view restaurants` to search results

** gui **

- [ ] Create search page
    - [ ] create search food
    - [ ] create search restaurant
- [ ] Add home button on all pages

** if time remains**
- [ ] add sort by option in `rest_list` and `food_list`



- ~~[ ] Try to separate back end and front end~~
