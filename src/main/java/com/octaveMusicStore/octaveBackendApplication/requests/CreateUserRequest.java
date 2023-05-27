package com.octaveMusicStore.octaveBackendApplication.requests;

import com.octaveMusicStore.octaveBackendApplication.models.User;
import lombok.*;

import javax.validation.constraints.Email;
import javax.validation.constraints.NotBlank;
import javax.validation.constraints.Size;

@Getter
@Setter
@NoArgsConstructor
@AllArgsConstructor
@Builder
@ToString
public class CreateUserRequest {

    @NotBlank(message = "User_Name can't be blank")
    @Size(min = 1,max = 40,message = "User_Name should be in 40 characters")
    private String userName;

    @NotBlank(message = "Email can't be blank")
    @Email(message = "Email should be valid")
    private String userEmail;

    @NotBlank(message = "Password should not be blank")
    @Size(min = 8,message = "Password should be of 8 digits")
    private String userPassword;
    private String phoneNo;

    public User toUser() {
        return User.builder().
                name(this.userName).
                email(this.userEmail).
                password(this.userPassword).
                phoneNumber(this.phoneNo).
                build();
    }
}
