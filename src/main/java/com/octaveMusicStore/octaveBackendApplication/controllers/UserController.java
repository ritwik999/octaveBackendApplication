package com.octaveMusicStore.octaveBackendApplication.controllers;

import com.octaveMusicStore.octaveBackendApplication.requests.CreateUserRequest;
import com.octaveMusicStore.octaveBackendApplication.responses.CreateUserResponse;
import com.octaveMusicStore.octaveBackendApplication.responses.GenericResponse;
import com.octaveMusicStore.octaveBackendApplication.responses.StatusCode;
import com.octaveMusicStore.octaveBackendApplication.services.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/octaveMusicStore")
public class UserController {

    @Autowired
    private UserService userService;
    //create a user
    @PostMapping("/addUser")
    public GenericResponse<CreateUserResponse> addUser(@RequestBody CreateUserRequest createUserRequest){

        CreateUserResponse createUserResponse= this.userService.addUser(createUserRequest);

        GenericResponse genericResponse= GenericResponse.builder().
                httpCode(HttpStatus.CREATED.value()).
                statusCode(StatusCode.SUCCESSFUL).
                message("User creation is successful !").
                data(createUserResponse).
                build();

        return genericResponse;
    }
}
