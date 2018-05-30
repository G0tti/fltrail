package unipotsdam.gf.modules.assessment.controller;

import java.util.Arrays;

public class GroupIdentifier {
    private String projectId;
    private String groupId;
    private String[] memberId;  // List of all Members

    public GroupIdentifier(String projectId, String groupId, String[] memberId) {
        this.projectId = projectId;
        this.groupId = groupId;
        this.memberId = memberId;
    }

    public String getProjectId() {
        return projectId;
    }

    public String[] getMemberId() {     //Returns the Student Id's
        return memberId;
    }
    public void setMemberId(String StudentId, int Index) {      //Sets the Student Id's on predefined Index, needs to be checked befor being inserted
        memberId[Index]=StudentId;
    }

    public void setProjectId(String projectId) {
        this.projectId = projectId;
    }

    public String getGroupId() {
        return groupId;
    }

    public void setGroupId(String groupId) {
        this.groupId = groupId;
    }

    @Override
    public String toString() {
        return "GroupIdentifier{" +
                "projectId='" + projectId + '\'' +
                ", groupId='" + groupId + '\'' +
                '}';
    }
}
