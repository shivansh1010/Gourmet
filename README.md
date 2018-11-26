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
- [ ] Create Front End (45%)
- [ ] Create Back End (85%)
- [x] add login and signup warning CSS
- [x] Enter more data
- [ ] Create Slide of databse layout

- [x] create back end for Delete item
- [x] Add back for end food item
- [x] In add_rest, modify fields
    - [x] rating is still integer (motta)
    - [x] insert time in proper form
- [x] In serve_query, redirect to somewhere
    - [x] ~~also display, if creation of restaurant was a success~~ redirect to restro page
    - [ ] ** add constraints** , ~~like limit time between 00:00 to 24:00~~ time limit to restro open and close time

- [ ] In booking.php, add restaurant details in frontend
    - [ ] also display, total number of seats available,
    - ~~[ ] create constraint, id user enters more number of seats than available~~
    - [ ] return some number, jo user physically restaurant ko dikhayega. **GUI**
- [ ] **GUI** modify price in cuisines
- [ ] **GUI** modify time input remove AM/PM add 24 hours format
- [ ] In user.php, add a link to see all of his booking status
- [x] Link `view restaurants` to search results
- [ ] In add, serve form, mention if discount is price or %
    - [ ] add constraint that `discount<price` or `0%<=discount<100%`
- [x] ~~Repeated error, on line28 of restaurant.php ``` Warning: Invalid argument supplied for foreach() in C:\wamp64\www\Gourmet\restaurant.php on line 28```~~
- [ ] same naam ke kai restaurant add ho rahe hain
- [ ] ** add more info in search_food.php **

### **GUI**

- [ ] Create search page
    - [ ] create search food
    - [x] create search restaurant
- [ ] Add home button on all pages user login/logout buttons
- [ ] Create css for user ~~and restro page~~
- [ ] Create css for booking
- [ ] modify `please login First` 

### **if time remains**
- [ ] add sort by option in `rest_list` and `food_list`
- [ ] modify scroll bar



- ~~[ ] Try to separate back end and front end~~
